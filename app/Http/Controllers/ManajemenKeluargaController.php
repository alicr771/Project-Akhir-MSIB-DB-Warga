<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manajemen_keluargas=manajemenKeluarga::all();
        return view('#');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $manajemen_keluargas = manajemenKeluarga::all();
        return view('#', compact('manajemen_keluargas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'no_kk' => 'required',
            'penduduk_id' => 'required', 
        ]);
    $manajemen_keluargas = new ManajemenKeluarga();
    $manajemen_keluargas->no_kk = $request->no_kk;
    $manajemen_keluargas->penduduk_id = $request->penduduk_id;
    $manajemen_keluargas->save();

        return redirect()->route('#')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manajemen_keluargas = manajemenKeluarga::with('penduduk')->findOrFail($id);
        return view('#', compact('manajemen_keluargas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manajemen_keluargas = manajemenKeluarga::findOrFail($id);

        return view('#', compact('manajemen_keluargas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'no_kk' => 'required',
            'penduduk_id' => 'required', 
        ]);

    
        $manajemen_keluargas = manajemenKeluarga::findOrFail($id);


        $manajemen_keluargas->update($validatedData);


        return redirect()->route('#')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manajemen_keluargas = manajemenKeluarga::findOrFail($id);
        $manajemen_keluargas->delete();

        return redirect()->route('#')->with('success', 'Product deleted successfully');
    }
}
