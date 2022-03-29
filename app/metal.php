<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\arra;
class metal extends Model
{
    public function arraMetal(){
        return $this->hasMany(arra::class,'id');
    }

    
}
