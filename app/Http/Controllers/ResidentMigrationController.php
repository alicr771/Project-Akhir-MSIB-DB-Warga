<?php

namespace App\Http\Controllers;

use App\Models\ResidentMigration;
use Illuminate\Http\Request;

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
        return view('admin.resident-migration.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        $statuses = [
            'single',
            'married'
        ];

        return view('admin.resident-migration.edit', compact('migration', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
