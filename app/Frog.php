<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frog extends Model
{
    public function getAnimal(){
        return $this->belogsTo(Animal::class);
    }
}
