<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
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
}
