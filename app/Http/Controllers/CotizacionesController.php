<?php

namespace App\Http\Controllers;

use App\arra;
use App\User;
use App\cotizaciones;
use Illuminate\Http\Request;
use App\Mail\CrearCotizaciones;
use App\Mail\RespuestaCotizacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CotizacionesController extends Controller
{

    public function index()
    {
        //mostramos las cotizaciones a el administrador
        $cotizaciones = cotizaciones::all();
        return view('cotizacionesADM.index',compact('cotizaciones'));
    }

    //creamos una funcion para mostrar las cotizaciones del usuario logueado
    public function user(){
        $id_usuario = auth()->user()->id;
        $cotizaciones = cotizaciones::all();
        return view('cotizacionesUser.cotizaciones',compact('cotizaciones'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //realizamos la validacion de los datos de las cotizaciones
        $data = request()->validate([
            'mensaje' => 'required',
            'arra' =>'required'
        ]);
        //consultamos los datos de la arra que se cotizara
        $arra = arra::find($data['arra']);

        //guardamos la peticion en nuestra base de datos
        DB::table('cotizaciones')->insert([
            'descripcion' => $data['mensaje'],
            'status' => 'NR',
            'respuesta' => '',
            'seriado' => 'NO',
            'iva' =>  16,
            'MSRP' => 0,
            'comision_promotor' => 0,
            'utilidad_distribuidor' => 0,
            'SPIF' => 0,
            'id_usuario' => auth()->user()->id,
            'id_arra' => $data['arra'],
            'plusvalizacion' => 0,
            'created_at' => date('Y:m:d H:i:s'),
            
        ]);


        //mandamos nuestro correo de notificacion de la nueva cotizacion
        Mail::to('pedroluis73376@gmail.com')
        ->send(new CrearCotizaciones($arra, $request));

        return redirect(route('cotizaciones.user'));
    }


    public function show(cotizaciones $cotizaciones)
    {
        //
    }


    public function edit(cotizaciones $cotizaciones)
    {
        //
    }


    public function update(Request $request, cotizaciones $cotizacion)
    {
        //definimos los datos de nuestro usuario en una variable
       $usuario = User::find($cotizacion->id_usuario);
        //actualizamos el campo respuesta en nuestra base de datos
        $data = $request->validate([
            'mensaje' => 'required',
            'email' => 'required'
        ]);
        //mandamos un correo de notificacion a nuestro cliente 
        if($cotizacion->status == 'NR'){
            Mail::to($data['email'])->send(new RespuestaCotizacion($usuario, $data));
            $cotizacion->updated_at= date('Y:m:d H:i:s');
        }
        
        $cotizacion->respuesta = $data['mensaje'];
        $cotizacion->status = 'R';
        
        $cotizacion->save();

       return redirect(route('cotizaciones.index'));
       
    }


    public function destroy(cotizaciones $cotizaciones)
    {
        //
    }
}
