<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mare extends Model
{
    public function getAnimal(){
        return $this->belongsTo(Animal::class);
    }
}
