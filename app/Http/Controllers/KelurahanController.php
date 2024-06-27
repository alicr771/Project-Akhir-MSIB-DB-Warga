<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubDistrict;

class KelurahanController extends Controller
{
    public function index()
    {
        $subDistricts = SubDistrict::all();
        return view('kelurahan.index', compact('subDistricts'));
    }

    public function create()
    {
        return view('kelurahan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'head' => 'required',
            
        ]);

        SubDistrict::create($request->all());
        return redirect()->route('kelurahan.index');
    }

    public function show(SubDistrict $subDistrict)
    {
        return view('kelurahan.show', compact('subDistrict'));
    }

    public function edit(SubDistrict $subDistrict)
    {
        return view('kelurahan.edit', compact('subDistrict'));
    }

    public function update(Request $request, SubDistrict $subDistrict)
    {
        $request->validate([
            'name' => 'required',
            'head' => 'required',
            
        ]);

        $subDistrict->update($request->all());
        return redirect()->route('kelurahan.index');
    }

    public function destroy(SubDistrict $subDistrict)
    {
        $subDistrict->delete();
        return redirect()->route('kelurahan.index');
    }
}
