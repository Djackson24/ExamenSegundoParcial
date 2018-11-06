<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dugong extends Model
{
    public function getAnimal(){
        return $this->belongsTo(Animal::class);
    }
}
