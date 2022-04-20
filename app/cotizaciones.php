<?php

namespace App;

use App\distribuidor;
use App\User;
use Illuminate\Database\Eloquent\Model;

class cotizaciones extends Model
{

    public function usuario(){
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function arra(){
        return $this->belongsTo(arra::class, 'id_arra');
    }

}
