<?php

namespace App\Http\Controllers;

use App\frente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frentes = frente::all();
        return view('frentes.index', compact('frentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $frentes = frente::all();
        return view('frentes.create',compact('frentes'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  \App\frente  $frente
     * @return \Illuminate\Http\Response
     */
    public function show(frente $frente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\frente  $frente
     * @return \Illuminate\Http\Response
     */
    public function edit(frente $frente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\frente  $frente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, frente $frente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\frente  $frente
     * @return \Illuminate\Http\Response
     */
    public function destroy(frente $frente)
    {
        //
        $frente->delete();
        return redirect(action('FrenteController@index'));
    }
}
