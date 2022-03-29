<?php

namespace App\Http\Controllers;

use App\metal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metales=metal::all();
        return view('metales.index', compact('metales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('metales.create');
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
            'nombre' => 'required | min:3',
        ]);

        DB::table('metals')->insert([
            'nombre_metal' => $data ['nombre'],
        ]);

       return redirect(action('MetalController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function show(metal $metal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function edit(metal $metal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, metal $metal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function destroy(metal $metal)
    {
        $metal->delete();
        return redirect(action('MetalController@index'));

    }
}
