<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Resident;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();

        return view('admin.document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $residents = Resident::get();
        return view('admin.document.create', compact('residents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required',
            'resident_id' => 'required|exists:residents,id',
            'file' => 'required|mimes:png,jpg,jpeg,pdf,webp|max:2048',
            'issued_date' => 'nullable|date',
            'expiration_date' => 'nullable|date',
            'notes' => 'nullable',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filepath = 'storage/' . $file->store('documents', 'public');
            
            $data['file'] = url($filepath);
        }

        Document::create([
            'type' => $data['type'],
            'resident_id' => $data['resident_id'],
            'path' => $data['file'],
            'issued_date' => $data['issued_date'],
            'expiration_date' => $data['expiration_date'],
            'notes' => $data['notes'],
        ]);

        return redirect()->route('document.index')->with('suc_message', 'Data Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return view('admin.document.detail', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
{
    $residents = Resident::all();
    return view('admin.document.edit', compact('document', 'residents'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $data = $request->validate([
            'type' => 'required',
            'resident_id' => 'required|exists:residents,id',
            'file' => 'nullable|mimes:png,jpg,jpeg,pdf,webp|max:2048',
            'issued_date' => 'nullable|date',
            'expiration_date' => 'nullable|date',
            'notes' => 'nullable',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filepath = 'storage/' . $file->store('documents', 'public');
            $data['path'] = url($filepath);
        } else {
            unset($data['file']);
        }

        $document->update($data);

        return redirect()->route('document.index')->with('suc_message', 'Data Berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();

        return redirect()->route('document.index')->with('suc_message', 'Data Berhasil dihapus!');
    }
}
