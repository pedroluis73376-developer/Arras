<?php

namespace App\Http\Controllers;

use App\User;
use App\TipoUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{

    public function index()
    {
        if (Gate::allows('Gerente-Administrador')) {
            //llamamos la vita de usuarios pero mandamos un arra para desplegarlos en una tabla
            $usuarios = User::all();
            return view('usuarios.index', compact('usuarios'));
        }
        return redirect(route('index'));
    }


    public function create()
    {
        if (Gate::allows('Gerente-Administrador')) {
            //llamanos la vista usuarios.create y le pasamos un arreglo de tipo de usuarios
            $categorias = TipoUsuario::all();
            return view('usuarios.create', compact('categorias'));
        }
        return redirect(route('index'));
    }


    public function store(Request $request)
    {
        if (Gate::allows('Gerente-Administrador')) {
            //validamos los campos del usuario
            $data = request()->validate([
                'nombre' => 'required | min:4',
                'apellido' => 'required | min: 4',
                'email' => 'required | email',
                'categoria' => 'required',
                //'imagen'=>'required|image',
            ]);

            DB::table('users')->insert([
                'name' => $data['nombre'],
                'last_name' => $data['apellido'],
                'email' => $data['email'],
                'tipo_usuario_id' => $data['categoria'],
                'password' => Hash::make('arras3888'),
            ]);

            return redirect(action('UsuariosController@index'));
        }
        return redirect(route('index'));
    }


    public function show(User $usuario)
    {
        //
    }


    public function edit(User $usuario)
    {
        if (Gate::allows('Gerente-Administrador')) {
            //
            $categorias = TipoUsuario::all();
            return view('usuarios.edit', compact('categorias', 'usuario'));
        }
        return redirect(route('index'));
    }


    public function update(Request $request, User $usuario)
    {
        if (Gate::allows('Gerente-Administrador')) {
            //
            $data = request()->validate([
                'nombre' => 'required | min:4',
                'apellido' => 'required | min: 4',
                'email' => 'required | email',
                'categoria' => 'required',
                //'imagen'=>'required|image',
            ]);

            $usuario->name = $data['nombre'];
            $usuario->last_name = $data['apellido'];
            $usuario->email = $data['email'];
            $usuario->tipo_usuario_id = $data['categoria'];

            $usuario->save();
            return redirect(action('UsuariosController@index'));
        }
        return redirect(route('index'));
    }


    public function destroy(User $usuario)
    {
        if (Gate::authorize('Gerente')) {
            //
            $usuario->delete();
            return redirect(action('DistribuidorController@index'));
        }
        return redirect(action('DistribuidorController@index'));
    }
}
