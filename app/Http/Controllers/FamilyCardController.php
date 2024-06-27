<?php

namespace App\Http\Controllers;

use App\Models\FamilyCard;
use App\Models\Resident;
use Illuminate\Http\Request;

class FamilyCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $families = FamilyCard::get();
        return view('admin.family.index', compact('families'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $residents = Resident::get();
        return view('admin.family.create', compact('residents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'number' => 'required|numeric'
        ]);

        $data = FamilyCard::create($data);

        return redirect()->route('family.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = FamilyCard::find($id);
        $members = $data->detail->pluck('id')->toArray();
        $residents = Resident::get();
        return view('admin.family.detail', compact('data', 'residents', 'members'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = FamilyCard::find($id);
        $members = $data->detail->pluck('id')->toArray();
        $residents = Resident::get();
        return view('admin.family.edit', compact('data', 'residents', 'members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'number' => 'required|numeric'
        ]);

        FamilyCard::find($id)->update([
            'resident_id' => $data['resident_id'],
            'number' => $data['number'],
        ]);
        
        return redirect()->route('family.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FamilyCard::find($id)->delete();

        return redirect()->route('family.index');
    }
}
