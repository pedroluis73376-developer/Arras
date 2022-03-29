<?php

namespace App\Http\Controllers;

use App\User;
use App\TipoUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DistribuidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //realizamos la consulta para pasar los parametros a nuestra tabla de distribuidores
        $distribuidores = User::all();
        return view('distribuidores.index', compact('distribuidores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //sacamos los datos de categorias para meterlos en nuestro select
        $categorias = TipoUsuario::all(['id','puesto']);
        return view('distribuidores.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validamos los datos obtenidos en nuestro formulario
        $data = request()->validate([
            'nombre'=>'required | min:4',
            'apellido'=>'required',
            'email'=>'required | email',
            'direccion'=>'required',
            'telefono'=>'required',
            'categoria'=>'required',
            //'imagen'=>'required|image',
        ]);

        //agregamos los valores a nuestra base de datos
        DB::table('users')->insert([
            'name' => $data['nombre'],
            'last_name' => $data['apellido'],
            'email' => $data['email'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'tipo_usuario_id' => $data['categoria'],
            'password' => Hash::make('arras12345'),
        ]);

        //redireccionamos despues de agregar los valores a la base de datos
        return redirect(action('DistribuidorController@index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\distribuidor  $distribuidor
     * @return \Illuminate\Http\Response
     */
    public function show(User $distribuidor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\distribuidor  $distribuidor
     * @return \Illuminate\Http\Response
     */
    public function edit(User $distribuidor)
    {
        //
        $categorias = TipoUsuario::all(['id','puesto']);
        return view('distribuidores.edit', compact('categorias','distribuidor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\distribuidor  $distribuidor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $distribuidor)
    {
        //validamos los campos para meterlos en la base de datos
        $data = request()->validate([
            'nombre'=>'required | min:4',
            'apellido'=>'required',
            'email'=>'required | email',
            'direccion'=>'required',
            'telefono'=>'required',
            'categoria'=>'required',
            //'imagen'=>'image',
           
        ]);

            //asignamos los campos que deseamos actualizar
        $distribuidor->name = $data['nombre'];
        $distribuidor->last_name = $data['apellido'];
        $distribuidor -> email = $data['email'];
        $distribuidor -> direccion = $data['direccion'];
        $distribuidor -> telefono = $data ['telefono'];
        $distribuidor -> tipo_usuario_id = $data['categoria'];

        //detectamos el cambio de la imagen
        // if($request['imagen']){
        //     //obtener la ruta de la imagen
        //     $ruta_imagen = $request->imagen->store('upload-distribuidor', 'public');

        //     //resize de la imagen
        //     $img = Image::make(public_path("storage/$ruta_imagen"))->fit(1000,500);
        //     $img->save();
        //     $distribuidor->imagen = $ruta_imagen;
        // }

        $distribuidor->save();
            return redirect(action("DistribuidorController@index"));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\distribuidor  $distribuidor
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $distribuidor)
    {
        $distribuidor->delete();
        return redirect(action('DistribuidorController@index'));
    }
}
