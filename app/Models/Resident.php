<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'name',
        'pob',
        'dob',
        'gender',
        'last_education',
        'citizenship',
        'marital_status',
    ];

    public function subDistrict(): BelongsTo
    {
        return $this->belongsTo(SubDistrict::class);
    }

    public function neighborhood(): BelongsTo
    {
        return $this->belongsTo(Neighborhood::class);
    }

    public function communityUnit(): BelongsTo
    {
        return $this->belongsTo(CommunityUnit::class);
    }

    public function familyCardDetail(): BelongsTo
    {
        return $this->belongsTo(FamilyCardDetail::class);
    }

    public function familyCard(): HasOne
    {
        return $this->hasOne(FamilyCard::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function migration(): HasOne
    {
        return $this->hasOne(ResidentMigration::class);
    }
}
