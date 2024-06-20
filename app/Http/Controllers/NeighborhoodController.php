<?php

namespace App\Http\Controllers;

use App\Models\Neighborhood;
use Illuminate\Http\Request;

class NeighborhoodController extends Controller
{
    public function index()
    {
        $neighborhoods = Neighborhood::all();

        return view('admin.neighborhood.index', compact('neighborhoods'));
    }

    public function create()
    {
        return view('admin.neighborhood.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Neighborhood $neighborhood)
    {
        return view('admin.neighborhood.detail', compact('neighborhood'));
    }

    public function edit(string $id)
    {
        $neighborhood = Neighborhood::find($id);

        return view('admin.neighborhood.edit', compact('neighborhood'));
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
