<?php

namespace App\Http\Controllers;

use App\Models\SubDistricts;
use Illuminate\Http\Request;

class ManagementKelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Data Kelurahan",
            'kelurahan' => SubDistricts::get(),
        ];
        return view('admin.datakelurahan')->with('data', $data);
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
        
        $data = [
            'name' => $request->name,
            'head' => $request->head,
        ];

        SubDistricts::insert($data);

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
        $id = $request->id;
        $data = [
            'name' => $request->name,
            'head' => $request->head,
        ];

        SubDistricts::where('id', $id)->update($data);

        return redirect()->back()->with('suc_message', 'Data Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id )
    {
    
        SubDistricts::where('id', $id)->delete();

        return redirect()->back()->with('suc_message', 'Data Berhasil disimpan!');
    }
}
