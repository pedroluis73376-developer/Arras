<?php

namespace App\Http\Controllers;

use App\arra;
use App\cotizaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CotizacionesController extends Controller
{

    public function index()
    {
        //
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

        

        return $arra->clave;
    }


    public function show(cotizaciones $cotizaciones)
    {
        //
    }


    public function edit(cotizaciones $cotizaciones)
    {
        //
    }


    public function update(Request $request, cotizaciones $cotizaciones)
    {
        //
    }


    public function destroy(cotizaciones $cotizaciones)
    {
        //
    }
}
