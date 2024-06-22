<?php
namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $generals = General::all();
        return view('admin.generals.index', compact('generals'));
    }

    public function create()
    {
        return view('admin.generals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'head' => 'required',
            'deputy_head' => 'required',
            'treasurer' => 'required',
            'secretary' => 'required',
        ]);

        General::create($request->all());
        return redirect()->route('generals.index')->with('success', 'General setting created successfully.');
    }
    public function show(General $general)
    {
        return view('admin.generals.show', compact('general'));
    }

    public function edit(General $general)
    {
        return view('admin.generals.edit', compact('general'));
    }

    public function update(Request $request, General $general)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'head' => 'required',
            'deputy_head' => 'required',
            'treasurer' => 'required',
            'secretary' => 'required',
        ]);

        $general->update($request->all());
        return redirect()->route('generals.index')->with('success', 'General setting updated successfully.');
    }
}
