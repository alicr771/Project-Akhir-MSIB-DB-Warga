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

    public function show(SubDistrict $kelurahan)
    {
        return view('kelurahan.show', compact('kelurahan'));
    }

    public function edit(SubDistrict $kelurahan)
    {
        return view('kelurahan.edit', compact('kelurahan'));
    }

    public function update(Request $request, SubDistrict $kelurahan)
    {
        $request->validate([
            'name' => 'required',
            'head' => 'required',
        ]);

        $kelurahan->update($request->all());
        return redirect()->route('kelurahan.index');
    }

    public function destroy(SubDistrict $kelurahan)
    {
        $kelurahan->delete();
        return redirect()->route('kelurahan.index');
    }
}
