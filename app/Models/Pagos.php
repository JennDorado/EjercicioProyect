<?php

namespace App\Models;
use App\Models\Tipo_pago;
use App\Models\Colaborador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;
    public function tipo_pago (){
        return $this->belongsTo('App\Models\Tipo_pago');

    }
    public function colaboradors (){
        return $this->belongsTo('App\Models\Colaborador');

    }
}
