<?php

namespace App\Http\Controllers;

use App\metal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class MetalController extends Controller
{

    public function index()
    {
        if (Gate::allows('Gerente-Administrador')) {
            $metales = metal::all();
            return view('metales.index', compact('metales'));
        }
        return redirect(route('index'));
    }

    public function create()
    {
        if (Gate::allows('Gerente-Administrador')) {
            return view('metales.create');
        }
        return redirect(route('index'));
    }


    public function store(Request $request)
    {
        if (Gate::allows('Gerente-Administrador')) {
            //
            $data = request()->validate([
                'nombre' => 'required | min:3',
            ]);

            DB::table('metals')->insert([
                'nombre_metal' => $data['nombre'],
            ]);

            return redirect(action('MetalController@index'));
        }
        return redirect(route('index'));
    }


    public function show(metal $metal)
    {
        //
    }


    public function edit(metal $metal)
    {
        //
    }


    public function update(Request $request, metal $metal)
    {
        //
    }


    public function destroy(metal $metal)
    {
        if (Gate::authorize('Gerente')) {
        $metal->delete();
        return redirect(action('MetalController@index'));
    }
    return redirect(action('MetalController@index'));
    }
}
