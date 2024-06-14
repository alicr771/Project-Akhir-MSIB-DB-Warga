<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenRWController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manajemen_r_w_s = manajemenRW::all();
        return view('#');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $manajemen_r_w_s = manajemenRW::all();
        return view('#', compact('manajemen_r_w_s'));
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
        $manajemen_r_w_s = new ManajememRW();
        $manajemen_r_w_s ->name = $request->name;
        $manajemen_r_w_s ->head = $request->head;
        $manajemen_r_w_s -> save();

        return redirect()->route('#')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manajemen_r_w_s = manajemenRW::findOrFail($id);
        return view('#', compact('manajemen_r_w_s'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manajemen_r_w_s = manajemenRW::findOrFail($id);
        return view('#', compact('manajemen_r_w_s'));
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
        $manajemen_r_w_s = manajemenRW::findOrFail($id);


        $manajemen_r_w_s->update($validatedData);


        return redirect()->route('#')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manajemen_r_w_s = manajemenRW::findOrFail($id);
        $manajemen_r_w_s->delete();

        return redirect()->route('#')->with('success', 'Product deleted successfully');
    }
}
