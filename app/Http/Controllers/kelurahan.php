<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kelurahan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelurahans = Kelurahan::all();
        return view('#', compact('kelurahans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelurahans = Kelurahan::all();
        return view('#', compact('kelurahans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'head' => 'required',
        ]);
        $kelurahans = new Kelurahan();
        $kelurahans ->name = $request->name;
        $kelurahans ->head = $request->head;
        $kelurahans -> save();

        return redirect()->route('#')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelurahans = Kelurahan::findOrFail($id);
        return view('#', compact('kelurahans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelurahans = Kelurahan::findOrFail($id);
        return view('#', compact('kelurahans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'head' => 'required',
        ]);
        $kelurahans = Kelurahan::findOrFail($id);


        $kelurahans->update($validatedData);


        return redirect()->route('#')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $kelurahans = Kelurahan::findOrFail($id);
        $kelurahans->delete();

        return redirect()->route('#')->with('success', 'Product deleted successfully');
    }
}
