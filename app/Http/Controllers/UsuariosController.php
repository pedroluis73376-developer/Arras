<?php

namespace App\Http\Controllers;

use App\User;
use App\TipoUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //llamamos la vita de usuarios pero mandamos un arra para desplegarlos en una tabla
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //llamanos la vista usuarios.create y le pasamos un arreglo de tipo de usuarios
        $categorias = TipoUsuario::all(); 
        return view('usuarios.create',compact('categorias'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validamos los campos del usuario
         $data = request()->validate([
            'nombre'=>'required | min:4',
            'apellido'=>'required | min: 4',
            'email'=>'required | email',
            'categoria'=>'required',
            //'imagen'=>'required|image',
        ]);

        DB::table('users')->insert([
            'name' => $data['nombre'],
            'last_name' => $data['apellido'],
            'email' => $data['email'],
            'tipo_usuario_id' => $data['categoria'],
            'password' => Hash::make('arras12345'),
        ]);

        return redirect(action('UsuariosController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        //
        $categorias = TipoUsuario::all();
    return view('usuarios.edit', compact('categorias', 'usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        //
        $data = request()->validate([
            'nombre'=>'required | min:4',
            'apellido'=>'required | min: 4',
            'email'=>'required | email',
            'categoria'=>'required',
            //'imagen'=>'required|image',
        ]);

        $usuario->name =$data['nombre'];
        $usuario->last_name =$data['apellido'];
        $usuario->email =$data['email'];
        $usuario->tipo_usuario_id =$data['categoria'];

        $usuario->save();
        return redirect(action('UsuariosController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        //
        $usuario->delete();
        return redirect(action('DistribuidorController@index'));
    }
}
