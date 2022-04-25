<?php

namespace App\Http\Controllers;

use App\arra;
use App\User;
use App\metal;
use App\frente;
use App\vuelta;
use App\cotizaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogoController extends Controller
{
    
    public function index(Request $request)
    {
        $metales = metal::all();
        $frentes = frente::all();
        $vueltas = vuelta::all();

        if($request['metal'] || $request['frente'] || $request['vuelta']){
        $metal_id = $request['metal'];
        $frente_id = $request['frente'];
        $vuelta_id = $request['vuelta'];
        $arras = arra::busqueda($metal_id, $frente_id, $vuelta_id) ->paginate(21);
        return view('arrasUser.catalogo', compact('arras','metales', 'frentes','vueltas','metal_id','frente_id','vuelta_id'));
        }
        $arras = arra::inRandomOrder()->paginate(12);
        return view('arrasUser.catalogo', compact('arras','metales', 'frentes','vueltas'));
    }

   
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }


    public function show(arra $arra)
    {
        //
    }

  
    public function edit(arra $arra)
    {
        //
    }

    
    public function update(Request $request, arra $arra)
    {
        //
    }

  
    public function destroy(arra $arra)
    {
        //
    }
}
