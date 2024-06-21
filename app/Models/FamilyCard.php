<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FamilyCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_kk'
    ];

    public function resident(): BelongsTo
    {
        return $this->belongsTo(Resident::class);
    }

    public function familyCardDetail(): HasOne
    {
        return $this->hasOne(FamilyCardDetail::class);
    }
}
