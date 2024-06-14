<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailKeluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
    ];


    public function keluarga()
    {
        return $this->belongsTo(ManajemenKeluarga::class);
    }
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }
}
