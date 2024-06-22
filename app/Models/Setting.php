<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'address',
        'head',
        'deputy_head',
        'treasurer',
        'secretary',
    ];
}
