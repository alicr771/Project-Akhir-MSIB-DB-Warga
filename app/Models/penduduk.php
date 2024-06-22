<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'name',
        'pob',
        'dob',
        'gender',
        'religion',
        'last_education',
        'citizenship',
        'marital_status',
    ];
    public function manajemenRT()
    {
        return $this->belongsTo(manajemenRT::class);
    }
    public function manajemenKeluarga()
    {
        return $this->hasone(manajemenKeluarga::class);
    }
    public function manajemenRW()
    {
        return $this->belongsTo(manajemenRW::class);
    }
    public function detailKeluarga()
    {
        return $this->hasOne(detailKeluarga::class);
    }
}
