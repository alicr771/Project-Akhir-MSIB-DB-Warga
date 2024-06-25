<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik', 'name', 'pob', 'dob', 'gender', 'religion',
        'last_education', 'citizenship', 'marital_status',
        'kelurahan_id', 'neighborhood_id', 'community_unit_id'
    ];

    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }

    public function communityUnit()
    {
        return $this->belongsTo(CommunityUnit::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }
}
