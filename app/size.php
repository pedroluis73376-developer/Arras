<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\arra;
class size extends Model
{
    //
    public function arraSize(){
        return $this->hasMany(arra::class,'id');
    }
}
