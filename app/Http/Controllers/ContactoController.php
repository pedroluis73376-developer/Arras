<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Mail\CrearContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
  
    public function index()
    {
        if (Gate::allows('Gerente-Administrador')) {
            $mensajes = Contacto::all();
            return view('arrasADM.mensajes', compact('mensajes'));
        }
        return redirect(route('index'));
    }

    public function create()
    {
        return view('arrasUser.contacto');
    }

 
    public function store(Request $request)
    {
        
        $data = request()->validate([
            'nombre' => 'required | min:5',
            'email' => 'required | email',
            'asunto' => 'min:10',
            'mensaje' => 'required'
        ]);

        DB::table('contactos')->insert(
            [
                'nombre' => $data['nombre'],
                'email' => $data['email'],
                'asunto' => $data['asunto'],
                'mensaje' => $data['mensaje'],
                'status' => 'NL',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ]
        );
        //mandamos el email de notificacion de la siguiente manera
        Mail::to('pedroluis73376@gmail.com')
            ->send(new CrearContacto($request));


        return redirect(route('index'));
   
    }

  
    public function show(Contacto $contacto)
    {
        //
    }

  
    public function edit(Contacto $contacto)
    {
        //
    }

    
    public function update(Request $request, Contacto $contacto)
    {
        if (Gate::authorize('Gerente-Administrador')) {
            $contacto->status = 'L';
            $contacto->save();

            return redirect(route('contactos.index'));
        }
        return redirect(action("ContactoController@index"));
    }

    public function destroy(Contacto $contacto)
    {
        //
    }
}
