<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    use HasFactory;

    protected $fillable = ['name','head'];

    public function residents()
    {
        return $this->hasMany(Resident::class);
    }
}
