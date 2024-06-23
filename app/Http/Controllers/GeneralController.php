<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
    public function index()
    {
        $general = General::first();

        return view('admin.generals.index', compact('general'));
    }


    public function edit($id)
    {
        $general = General::findOrFail($id);

        return view('admin.generals.edit', compact('general'));
    }

    public function update(Request $request, $id)
    {
        $general = General::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'head' => ['required', 'string', 'max:255'],
            'deputy_head' => ['required', 'string', 'max:255'],
            'treasurer' => ['required', 'string', 'max:255'],
            'secretary' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $general->update($request->all());

        return redirect()->route('generals.index')->with('success', 'General updated successfully');
    }

    //USER
    public function general()
    {
        $general = General::first();

        return view('user.generals.index', compact('general'));
    }
}
