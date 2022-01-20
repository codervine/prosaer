<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function states(){
        return $this->hasMany(State::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public function organisations(){
        return $this->hasMany(Organisation::class);
    }
}
