<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyCard extends Model
{
    use HasFactory;

    protected $table = 'family_cards';
    
    protected $fillable = [
        'resident_id',
        'number'
    ];

    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id', 'id');
    }

    public function detail()
    {
        return $this->hasMany(FamilyCardDetail::class, 'family_card_id', 'id');
    }
}
