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

        $request->validate([
            'name' => 'required|string|max:255',
            'head' => 'required|string|max:255',
        ]);

        Neighborhood::create($request->all());
        return redirect()->route('neighborhood.index')->with('success', 'Neighborhood created successfully.');
    }

    public function show(Neighborhood $neighborhood)
    {
        return view('admin.neighborhood.detail', compact('neighborhood'));
    }

    public function edit(string $id)
    {
        $neighborhood = Neighborhood::findOrFail($id);
        return view('admin.neighborhood.edit', compact('neighborhood'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'head' => 'required|string|max:255',
        ]);
        $neighborhood = Neighborhood::findOrFail($id);
        $neighborhood->update($request->all());
        return redirect()->route('neighborhood.index')->with('success', 'Neighborhood updated successfully.');
    }

    public function destroy(string $id)
    {
        $neighborhood = Neighborhood::findOrFail($id);
        $neighborhood->delete();

        return redirect()->route('neighborhood.index')->with('success', 'Neighborhood deleted successfully.');
    }
}
