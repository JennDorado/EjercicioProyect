<?php

namespace App\Models;
use  App\Models\proyecto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public function proyectos (){
        return $this->hasMany('App\Models\proyecto');

    }
}
