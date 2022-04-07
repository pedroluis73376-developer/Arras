<?php

namespace App;

use App\metal;
use App\frente;
use App\size;
use App\vuelta;
use Illuminate\Database\Eloquent\Model;

class arra extends Model
{

protected $fillable = [
    'nombre','peso','precio','grosor','imagen1','imagen2','imagen3'
];

      //funcion N:1 metales
      public function metal(){
        return $this->belongsTo(metal::class,'metales_id');
    }
    //funcion N:1 frente 
    public function frente(){
        return $this->belongsTo(frente::class,'frentes_id');
    }

    //funcion N:1 size 
    public function size(){
        return $this->belongsTo(size::class,'size_id');
    }
    //funcion N:1 vuelta 
    public function vuelta(){
        return $this->belongsTo(vuelta::class,'vueltas_id');
    }
}
