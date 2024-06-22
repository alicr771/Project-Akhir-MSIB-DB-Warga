<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'head'
    ];

    public function penduduks()
    {
        return $this->hasMany(Penduduk::class, 'kelurahan_id', 'id_kelurahan');
    }
}
