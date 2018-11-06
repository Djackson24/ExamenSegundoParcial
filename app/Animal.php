<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table="animals";


    public function Antelope(){
        return $this -> hasMany(Antelope::class);
    }

    public function Dugong(){
        return $this -> hasMany(Dugong::class);
    }
    public function Frog(){
        return $this -> hasMany(Frog::class);
    }
    public function Mare(){
        return $this -> hasMany(Mare::class);
    }
    public function Octopus(){
        return $this -> hasMany(Octopus::class);
    }
    public function Vicuna(){
        return $this -> hasMany(Vicuna::class);
    }

}
