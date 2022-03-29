<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\arra;
class frente extends Model
{
    
    //funcion arra 1:N
    public function arraFrente(){
        return $this->hasMany(arra::class,'id');
    }
}
