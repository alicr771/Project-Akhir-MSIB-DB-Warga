<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'address',
        'head',
        'deputy_head',
        'treasurer',
        'secretary',
    ];
    
}
