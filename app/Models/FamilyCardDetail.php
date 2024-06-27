<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyCardDetail extends Model
{
    use HasFactory;

    protected $table = 'family_card_details';

    protected $fillable = [
        'family_card_id',
        'resident_id',
        'status',
    ];

    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id', 'id');
    }

    public function family()
    {
        return $this->belongsTo(FamilyCard::class, 'family_card_id', 'id');
    }
}
