<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CrearContacto extends Mailable
{
    use Queueable, SerializesModels;
    //creamos una variable publica
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //asignamos los valores de data a nuestra variable contacto
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $contacto = $this->data;
        return $this->subject('Nuevo Mensaje Arras3888')->view('email.email',compact('contacto'));
    }
}
