<?php

namespace App\Mail;

use App\arra;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CrearCotizaciones extends Mailable
{
    use Queueable, SerializesModels;

    //creamos nuestras variables globales para poder usar nuestros datos
    public $data1;
    public $arra1;
    
    public function __construct(arra $arra, $data)
    {
        //asignamos los valores a nuestras variables globales
        $this->arra1 = $arra;
        $this->data1 = $data;
    }

 
    public function build()
    {
        $data= $this->data1;
        $arra = $this->arra1;
        return $this->subject(Auth::user()->name.'('.Auth::user()->email.')')->view('email.cotizaciones', compact('data','arra'));
    }
}
