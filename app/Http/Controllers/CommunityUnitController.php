<?php
namespace App\Http\Controllers;

use App\Models\CommunityUnit;
use Illuminate\Http\Request;

class CommunityUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $communityUnits = CommunityUnit::all();

        return view('admin.community-unit.index', compact('communityUnits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.community-unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate data
        $request->validate([
            'name' => 'required|string|max:255',
            'head' => 'required|string|max:255',
        ]);

        CommunityUnit::create([
            'name' => $request->name,
            'head' => $request->head,
        ]);

        return redirect()->route('community-unit.index')->with('success', 'Penduduk RW berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(CommunityUnit $communityUnit)
    {
        return view('admin.community-unit.detail', compact('communityUnit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommunityUnit $communityUnit)
    {
        return view('admin.community-unit.edit', compact('communityUnit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CommunityUnit $communityUnit)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'head' => 'required|string|max:255',
        ]);

        $data = $request->only(['name', 'head']);

        $communityUnit->update($data);
        return redirect()->route('community-unit.index')->with('success', 'Data penduduk RW berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommunityUnit $communityUnit)
    {
        $communityUnit->delete();

        return redirect()->route('community-unit.index')->with('success', 'Penduduk RW berhasil dihapus');
    }
}
