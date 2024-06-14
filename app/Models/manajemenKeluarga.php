<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manajemenKeluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_kk',
    ];
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }
    public function detailkeluarga()
    {
        return $this->hasOne(detailKeluarga::class);
    }
}
