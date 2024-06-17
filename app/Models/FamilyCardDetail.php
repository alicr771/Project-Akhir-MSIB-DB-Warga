<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FamilyCardDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'status'
    ];

    public function residents(): HasMany
    {
        return $this->hasMany(Resident::class);
    }

    public function familyCard(): BelongsTo
    {
        return $this->belongsTo(FamilyCard::class);
    }
}
