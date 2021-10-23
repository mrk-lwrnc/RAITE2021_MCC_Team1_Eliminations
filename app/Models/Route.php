<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'ship_id',
        'origin_longtitude',
        'origin_latitude',
        'destination_longtitude',   
        'destination_latitude',
        'distance',
        'eta',
        'price',
        'crews',
    ];

    public function ship() 
    {
        return $this->belongsTo(Ship::class);
    }
}
