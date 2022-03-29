<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
   
    public function User(){
        return $this->hasMany(User::class);
     }
}
