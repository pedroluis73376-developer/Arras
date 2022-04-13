<?php

namespace App\Http\Controllers;

use App\arra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ArraController extends Controller
{
   
    public function index()
    {
        //aqui utilizamos las gate para dar acceso si el usuario es administrador o gerente 
        if (Gate::allows('Gerente-Administrador')) {
        $arras = arra::all();
        return view('arrasADM.index', compact('arras'));
        }
        return redirect(route('index'));
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
        //mandamos mostrar la vista de la arra para realizar la cotizacion
       
            return view('arrasUser.cotizar',compact('arra'));
        
        
    }

 
    public function edit(arra $arra)
    {
        if (Gate::allows('Gerente-Administrador')) {
        return view('arrasADM.edit', compact('arra'));
        }
        return redirect(route('index'));
    }

 
    public function update(Request $request, arra $arra)
    {
        if (Gate::allows('Gerente-Administrador')) {
        //validamos los campos de nuestro formulario
        $data = request()->validate([
            'nombre' => 'required',
            'peso' => 'required',
            'precio' => 'required',
            'grosor' => 'required',
            'imagen1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imagen2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imagen3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',

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
        $arra->updated_at = date('Y:m:d H:i:s');
        $arra->save();
        return redirect(route('arras.edit', ['arra' => $arra->id]));
    }
        return redirect(route('index'));

}

 
    public function destroy(arra $arra)
    {
        //
    }
}
