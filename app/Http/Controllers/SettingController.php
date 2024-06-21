<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'address' => 'required',
            'head' => 'required',
            'deputy_head' => 'required',
            'treasurer' => 'required',
            'secretary' => 'required',
        ]);

        Setting::create($request->all());

        return redirect()->route('settings.index')
                         ->with('success', 'Setting created successfully.');
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'address' => 'required',
            'head' => 'required',
            'deputy_head' => 'required',
            'treasurer' => 'required',
            'secretary' => 'required',
        ]);

        $setting = Setting::find($id);
        $setting->update($request->all());

        return redirect()->route('settings.index')
                         ->with('success', 'Setting updated successfully.');
    }
}
