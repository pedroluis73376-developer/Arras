<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cotizacion;
use App\usuario;
use App\arra;
use App\distribuidor;
class relacionCotizaciones extends Model
{
    //
    public function cotizacion(){
        return $this->belongsToMany(cotizaciones::class,'id');
    }
    public function usuario(){
        return $this->belongsToMany(User::class);
    }
    public function arra(){
        return $this->belongsToMany(arra::class);
    }
    public function distribuidor(){
        return $this->belongsToMany(distribuidor::class);
    }
}
