<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'speed',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function route()
    {
        return $this->hasMany(Route::class);
    }
}