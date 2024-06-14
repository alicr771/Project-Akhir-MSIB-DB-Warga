<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penduduks = penduduk::all();
        return view('#');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penduduks = penduduk::all();
        return view('#', compact('penduduks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'last_education' => 'required',
            'citizenship' => 'required',
            'marital_status' => 'required',
            'manajemenRT_id' => 'required',
            'manajemenRW_id' => 'required',
        ]);
        $penduduks = new Penduduk();
        $penduduks ->nik = $request->nik;
        $penduduks ->name = $request->name;
        $penduduks ->pob = $request->pob;
        $penduduks ->dob = $request->dob;
        $penduduks ->gender = $request->gender;
        $penduduks ->religion = $request->religion;
        $penduduks ->last_education = $request->last_education;
        $penduduks ->citizenship = $request->citizenship;
        $penduduks ->marital_status = $request->marital_status;
        $penduduks ->manajemenRT_id = $request->manajemenRT_id;
        $penduduks ->manajemenRW_id = $request->manajemenRW_id;
        $penduduks -> save();

        return redirect()->route('tampilpenduduk')->with('success', 'Product added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penduduks = penduduk::with('ManajemenRT,manajemenRW')->findOrFail($id);
        return view('#', compact('penduduks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penduduks = penduduk::findOrFail($id);
        return view('#', compact('penduduks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'last_education' => 'required',
            'citizenship' => 'required',
            'marital_status' => 'required',
            'manajemenRT_id' => 'required',
            'manajemenRW_id' => 'required',
        ]);
        $penduduks = penduduk::findOrFail($id);


        $penduduks->update($validatedData);


        return redirect()->route('#')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penduduks = penduduk::findOrFail($id);
        $penduduks->delete();

        return redirect()->route('#')->with('success', 'Product deleted successfully');
    }
}
