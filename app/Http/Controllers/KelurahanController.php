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

    public function show(string $id)
    {
        $subDistrict = SubDistrict::find($id);
        return view('kelurahan.show', compact('subDistrict'));
    }

    public function edit(string $id)
    {
        $subDistrict = SubDistrict::find($id);
        return view('kelurahan.edit', compact('subDistrict'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'head' => 'required',
            
        ]);

        SubDistrict::find($id)->update($request->all());
        return redirect()->route('kelurahan.index');
    }

    public function destroy(string $id)
    {
        SubDistrict::find($id)->delete();
        return redirect()->route('kelurahan.index');
    }
}
