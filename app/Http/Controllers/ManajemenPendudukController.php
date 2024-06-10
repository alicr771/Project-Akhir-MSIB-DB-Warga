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
        return view('#');
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
        $penduduks -> save();

        return redirect()->route('tampilpenduduk')->with('success', 'Product added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
