<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'number',
        'path',
        'issued_date',
        'expiration_date',
        'notes',
    ];
}
