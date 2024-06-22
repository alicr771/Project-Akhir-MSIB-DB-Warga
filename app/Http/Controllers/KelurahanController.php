<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    public function index()
    {
        $kelurahans = Kelurahan::all();
        return view('kelurahan.index', compact('kelurahans'));
    }

    public function create()
    {
        return view('kelurahan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required'
        ]);

        Kelurahan::create($request->all());
        return redirect()->route('kelurahan.index');
    }

    public function show(Kelurahan $kelurahan)
    {
        return view('kelurahan.show', compact('kelurahan'));
    }

    public function edit(Kelurahan $kelurahan)
    {
        return view('kelurahan.edit', compact('kelurahan'));
    }

    public function update(Request $request, Kelurahan $kelurahan)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required'
        ]);

        $kelurahan->update($request->all());
        return redirect()->route('kelurahan.index');
    }

    public function destroy(Kelurahan $kelurahan)
    {
        $kelurahan->delete();
        return redirect()->route('kelurahan.index');
    }
}
