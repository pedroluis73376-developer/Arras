<?php

namespace App\Http\Controllers;

use App\vuelta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class VueltaController extends Controller
{
    
    public function index()
    {
        if (Gate::allows('Gerente-Administrador')) {
        $vueltas = vuelta::all();
        return view('vueltas.index',compact('vueltas'));
    }
    return redirect(route('index'));
    }

    
    public function create()
    {
        if (Gate::allows('Gerente-Administrador')) {
        //
        return view('vueltas.create');
    }
    return redirect(route('index'));
    }

    public function store(Request $request)
    {
        if (Gate::allows('Gerente-Administrador')) {
        $data = request()->validate([
            'vuelta' => 'required | min:4'
        ]);

        DB::table('vueltas')->insert([
            'nombre_vuelta'=> $data['vuelta'],
        ]);
        return redirect(action('VueltaController@index'));
    }
    return redirect(route('index'));
    }

  
    public function show(vuelta $vuelta)
    {
        //
    }

  
    public function edit(vuelta $vuelta)
    {
        //
    }

 
    public function update(Request $request, vuelta $vuelta)
    {
        //
    }

    
    public function destroy(vuelta $vuelta)
    {
        if (Gate::authorize('Gerente')) {
        $vuelta->delete();
        return redirect(action('VueltaController@index'));
    }
    return redirect(action('VueltaController@index'));
    }
}
