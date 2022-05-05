<?php

namespace App;
use App\arra;
use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    //
    public function arra1(){
       return $this->belongsTo(arra::class, 'arra_id1');
    }
    public function arra2(){
       return $this->belongsTo(arra::class, 'arra_id2');
    }
    public function arra3(){
       return $this->belongsTo(arra::class, 'arra_id3');
    }
}
