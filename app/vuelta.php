<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vuelta extends Model
{
    public function arraVuelta(){
        return $this->hasMany(arra::class,'id');
    }
}
