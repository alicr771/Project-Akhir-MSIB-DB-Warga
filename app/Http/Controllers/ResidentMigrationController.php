<?php

namespace App\Http\Controllers;

use App\Models\ResidentMigration;
use Illuminate\Http\Request;
use App\Models\Resident;

class ResidentMigrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $migrations = ResidentMigration::all();

        return view('admin.resident-migration.index', compact('migrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $residents = Resident::all(); 

        return view('admin.resident-migration.create', compact('residents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'resident_id' => 'required|integer',
            'date' => 'required|date',
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'cause' => 'required|string',
            'status' => 'required|string',
        ]);

        ResidentMigration::create($request->all());

        return redirect()->route('resident-migration.index')->with('success', 'Resident migration created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $migration = ResidentMigration::find($id);

        return view('admin.resident-migration.detail', compact('migration'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $migration = ResidentMigration::find($id);
        $residents = Resident::all();
        $statuses = ['pindah', 'datang']; 

        return view('admin.resident-migration.edit', compact('migration', 'residents', 'statuses'));
   }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'resident_id' => 'required|integer',
            'date' => 'required|date',
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'cause' => 'required|string',
            'status' => 'required|string',
        ]);

        $migration = ResidentMigration::find($id);
        $migration->update($request->all());

        return redirect()->route('resident-migration.index')->with('success', 'Resident migration updated successfully.');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $migration = ResidentMigration::find($id);
        $migration->delete();

        return redirect()->route('resident-migration.index')->with('success', 'Resident migration deleted successfully.');
    }
}
