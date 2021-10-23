<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRank extends Model
{
    use HasFactory;

    protected $fillable = [
        'rank'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
