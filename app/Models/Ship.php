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

      public function oneCaptain()
    {
        return $this->users()->where('rank_id', 3)->count();
    }

    public function oneChiefMate()
    {
        return $this->users()->where('rank_id', 4)->count();
    }

    public function oneSecondMate()
    {
        return $this->users()->where('rank_id', 5)->count();
    }

    public function oneThirdMate()
    {
        return $this->users()->where('rank_id', 6)->count();
    }
}
