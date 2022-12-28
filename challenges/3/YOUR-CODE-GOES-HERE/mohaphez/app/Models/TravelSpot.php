<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelSpot extends Model
{
    use HasFactory;

    protected $table = "travels_spots";
    protected $fillable = [
        'position',
        'latitude',
        'longitude',
        'travel_id'
    ];

    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }
}
