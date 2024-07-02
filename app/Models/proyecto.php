<?php

namespace App\Models;
use App\Models\Colaborador;
use App\Models\Cliente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    use HasFactory;
    public function colaboradors (){
        return $this->belongsToMany('App\Models\colaborador');

    }

    public function clientes (){
        return $this->hasMany('App\Models\cliente');

    }
}
