<?php

namespace App\Http\Controllers;

use App\Models\Document;
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
        return view('admin.document.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'type' => 'required',
            'number' => 'required',
            'path' => 'required',
            'issued_date' => 'required',
            'expiration_date' => 'required',
            'notes' => 'required',
        ]);
        Document::create($request->all());

        return redirect()->back()->with('suc_message', 'Data Berhasil disimpan!');
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
        return view('admin.document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $request->id;
        $data = [
            'type' => $request->type,
            'number' => $request->number,
            'path' => $request->path,
            'issued_date' => $request->issued_date,
            'expiration_date' => $request->expiration_date,
            'notes' => $request->notes,
        ];

        Document::where('id', $id)->update($data);

        return redirect()->back()->with('suc_message', 'Data Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Document::where('id', $id)->delete();
    }
}
