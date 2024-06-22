<?php

namespace App\Http\Controllers;

use App\Models\SubDistricts;
use Illuminate\Http\Request;

class ManagementKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Data Keluarga",
         
        ];
        return view('admin.datakeluarga')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        
       

        return redirect()->back()->with('suc_message', 'Data Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        

        return redirect()->back()->with('suc_message', 'Data Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id )
    {
    
        
        return redirect()->back()->with('suc_message', 'Data Berhasil disimpan!');
    }
}
