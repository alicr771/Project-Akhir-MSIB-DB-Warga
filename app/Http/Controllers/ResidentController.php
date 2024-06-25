<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use App\Models\Neighborhood;
use App\Models\CommunityUnit;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function index()
    {
        
        $residents = Resident::all();
        return view('admin.resident.index', compact('residents'));
    }

    public function create()
    {
        $neighborhoods = Neighborhood::all();
        $communityUnits = CommunityUnit::all();
        $kelurahans = Kelurahan::all();
        return view('admin.resident.create', compact('neighborhoods', 'communityUnits', 'kelurahans'));
    
    }

    public function store(Request $request){

    
    $request->validate([
        'nik' => 'required|unique:residents,nik', 
        'name' => 'required',
        'pob' => 'required',
        'dob' => 'required|date',
        'gender' => 'required|in:male,female',
        'religion' => 'required|in:islam,kristen,hindu,buddha',
        'last_education' => 'required|in:sd,smp,sma,diploma,sarjana',
        'citizenship' => 'required|in:wna,wni',
        'marital_status' => 'required|in:married,single',
        'kelurahan_id' => 'required|exists:kelurahans,id',
        'neighborhood_id' => 'required|exists:neighborhoods,id',
        'community_unit_id' => 'required|exists:community_units,id',
    ]);


        Resident::create($request->all());

        return redirect()->route('resident.index')->with('success', 'Resident added successfully.');
    }

    public function show($id)
    {
        $resident = Resident::findOrFail($id);
        return view('admin.resident.detail', compact('resident'));
    }
    

    public function edit($id)
    {
        $resident = Resident::findOrFail($id);
        $neighborhoods = Neighborhood::all();
        $communityUnits = CommunityUnit::all();
        $kelurahans = Kelurahan::all();
        return view('admin.resident.edit', compact('resident', 'neighborhoods', 'communityUnits', 'kelurahans'));
        }

    public function update(Request $request, $id)
    {
        
        $resident = Resident::findOrFail($id);
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'pob' => 'required',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female',
            'religion' => 'required|in:islam,kristen,hindu,buddha',
            'last_education' => 'required|in:sd,smp,sma,diploma,sarjana',
            'citizenship' => 'required|in:wna,wni',
            'marital_status' => 'required|in:married,single',
            'kelurahan_id' => 'required|exists:kelurahans,id',
            'neighborhood_id' => 'required|exists:neighborhoods,id',
            'community_unit_id' => 'required|exists:community_units,id',
        ]);  

        $resident->update($request->all());

        return redirect()->route('resident.index')->with('success', 'Resident updated successfully.');
    }

    public function destroy($id)
    {
        $resident = Resident::findOrFail($id);
        $resident->delete();

        return redirect()->route('resident.index')->with('success', 'Resident deleted successfully.');
    }

}
