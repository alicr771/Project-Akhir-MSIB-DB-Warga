<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResidentMigration extends Model
{
    use HasFactory;

    protected $fillable = [
        'resident_id',
        'date',
        'from',
        'to',
        'cause',
        'status',
    ];

    public function resident(): BelongsTo
    {
        return $this->belongsTo(Resident::class);
    }
}
