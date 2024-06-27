<?php

namespace App\Http\Controllers;

use App\Models\FamilyCard;
use App\Models\FamilyCardDetail;
use Illuminate\Http\Request;

class FamilyCardDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('family.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('family.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'family_card_id' => 'required|exists:family_cards,id',
            'resident_ids' => 'required|array',
            'resident_ids.*' => 'required|exists:residents,id',
            'statuses' => 'required|array',
            'statuses.*' => 'required|in:ayah,ibu,anak'
        ]);

        foreach ($request->resident_ids as $index => $resident_id) {
            FamilyCardDetail::create([
                'family_card_id' => $request->family_card_id,
                'resident_id' => $resident_id,
                'status' => $request->statuses[$index],
            ]);
        }

        return redirect()->route('family.edit', $request->family_card_id);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = FamilyCardDetail::find($id);
        $family = FamilyCard::find($detail->family_card_id);
        return redirect()->route('family.show', $family->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detail = FamilyCardDetail::find($id);
        $family = FamilyCard::find($detail->family_card_id);
        return redirect()->route('family.edit', $family->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect()->route('family.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = FamilyCardDetail::find($id);
        $data->delete();

        return redirect()->route('family.edit', $data->family->id);
    }
}
