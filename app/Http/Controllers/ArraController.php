<?php

namespace App\Http\Controllers;

use App\arra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arras = arra::all();
        return view('arrasADM.index', compact('arras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\arra  $arra
     * @return \Illuminate\Http\Response
     */
    public function show(arra $arra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\arra  $arra
     * @return \Illuminate\Http\Response
     */
    public function edit(arra $arra)
    {
        return view('arrasADM.edit', compact('arra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\arra  $arra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, arra $arra)
    {
        //validamos los campos de nuestro formulario
        $data = request()->validate([
            'nombre' => 'required',
            'peso' => 'required',
            'precio' => 'required',
            'grosor' => 'required',
            'imagen1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        //movemos nuestras imagenes a nuestra carpeta storage
        if ($request['imagen1']) {
            $imgFrente = $request->imagen1->store('upload-arras', 'public');
            $arra->imgFrente = $imgFrente;
        }
        if ($request['imagen2']) {
            $imgVuelta = $request->imagen2->store('upload-arras', 'public');
            $arra->imgVuelta = $imgVuelta;
        }
        if ($request['imagen3']) {
            $imgOpcional = $request->imagen3->store('upload-arras', 'public');
            $arra->imgOpcional = $imgOpcional;
        }

        //agregamos a nuestra base de datos los campos editados
        $arra->nombre = $data['nombre'];
        $arra->peso = $data['peso'];
        $arra->precio = $data['precio'];
        $arra->grosor = $data['grosor'];
        $arra->save();
        return redirect(route('arras.edit', ['arra' => $arra->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\arra  $arra
     * @return \Illuminate\Http\Response
     */
    public function destroy(arra $arra)
    {
        //
    }
}
