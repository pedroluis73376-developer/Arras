<?php

namespace App\Http\Controllers;

use App\frente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class FrenteController extends Controller
{
  
    public function index()
    {
        if (Gate::allows('Gerente-Administrador')) {
        $frentes = frente::all();
        return view('frentes.index', compact('frentes'));
        }
        return redirect(route('index'));
    }

    public function create()
    {
        if (Gate::allows('Gerente-Administrador')) {
        $frentes = frente::all();
        return view('frentes.create',compact('frentes'));
        }    
        return redirect(route('index'));
    }

    public function store(Request $request)
    {
        if (Gate::allows('Gerente-Administrador')) {
        //
        $data = request()->validate([
            'nombre' => 'required | min:4',
            'tipo_frente' => 'required',
        ]);

        DB::table('frentes')->insert([
            'nombre_frente' => $data['nombre'],
            'tipo_frente' => $data['tipo_frente'],
        ]);
        return redirect(action('FrenteController@index'));

    }    
    return redirect(route('index'));
    }


    public function show(frente $frente)
    {
        //
    }

    public function edit(frente $frente)
    {
        //
    }

   
    public function update(Request $request, frente $frente)
    {
        //
    }

    public function destroy(frente $frente)
    {
        //
        if (Gate::authorize('Gerente')) {
        $frente->delete();
        return redirect(action('FrenteController@index'));
        }
        return redirect(action('FrenteController@index'));
    }
}
