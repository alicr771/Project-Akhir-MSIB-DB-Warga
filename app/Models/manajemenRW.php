<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manajemenRW extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'head'
    ];

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class);
    }
}
