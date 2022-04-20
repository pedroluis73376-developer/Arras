<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RespuestaCotizacion extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $usuario;

    public function __construct(User $usuario, $data)
    {
        //asignamos datos a nuestra variable global
        $this->data = $data;
        $this->usuario = $usuario;
    }


    public function build()
    {
        $usuario = $this->usuario;
        $data = $this->data;
        return $this->view('email.respuesta',compact('usuario', 'data'));
    }
}
