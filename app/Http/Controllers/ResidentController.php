<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $residents = Resident::all();
        return view('admin.resident.index', compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resident.create');
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
    public function show(Resident $resident)
    {
        return view('admin.resident.detail', compact('resident'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resident $resident)
    {
        $selectOptions = [
            'gender' => [
                'male',
                'female'
            ],
            'last_education' => [
                'sd',
                'smp',
                'sma',
                'diploma',
                'sarjana'
            ],
            'citizenship' => [
                'wna',
                'wni'
            ],
            'marital_status' => [
                'married',
                'single'
            ]
        ];

        return view('admin.resident.edit', compact('resident', 'selectOptions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resident $resident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resident $resident)
    {
        //
    }
}
