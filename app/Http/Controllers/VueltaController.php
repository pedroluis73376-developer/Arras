<?php

namespace App\Http\Controllers;

use App\vuelta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VueltaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vueltas = vuelta::all();
        return view('vueltas.index',compact('vueltas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vueltas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'vuelta' => 'required | min:4'
        ]);

        DB::table('vueltas')->insert([
            'nombre_vuelta'=> $data['vuelta'],
        ]);
        return redirect(action('VueltaController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vuelta  $vuelta
     * @return \Illuminate\Http\Response
     */
    public function show(vuelta $vuelta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vuelta  $vuelta
     * @return \Illuminate\Http\Response
     */
    public function edit(vuelta $vuelta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vuelta  $vuelta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vuelta $vuelta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vuelta  $vuelta
     * @return \Illuminate\Http\Response
     */
    public function destroy(vuelta $vuelta)
    {
        $vuelta->delete();
        return redirect(action('VueltaController@index'));
    }
}
