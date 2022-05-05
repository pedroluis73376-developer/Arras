<?php

namespace App\Http\Controllers;

use App\User;
use App\TipoUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class DistribuidorController extends Controller
{

    public function index()
    {
        //aqui utilizamos las gate para dar acceso si el usuario es administrador o gerente 
        if (Gate::allows('Gerente-Administrador')) {
            $categorias = TipoUsuario::all(['id', 'puesto'])->where('id','>',3);
            $distribuidores = User::all();
            return view('distribuidores.index', compact('distribuidores','categorias'));
        }

        return redirect(route('index'));

        //realizamos la consulta para pasar los parametros a nuestra tabla de distribuidores

    }


    public function create()
    {
        if (Gate::allows('Gerente-Administrador')) {
            //sacamos los datos de categorias para meterlos en nuestro select
            $categorias = TipoUsuario::all(['id', 'puesto']);
            return view('distribuidores.create', compact('categorias'));
        }
        return redirect(route('index'));
    }

    public function store(Request $request)
    {
        if (Gate::allows('Gerente-Administrador')) {
            //validamos los datos obtenidos en nuestro formulario
            $data = request()->validate([
                'nombre' => 'required | min:4',
                'apellido' => 'required',
                'email' => 'required | email',
                'direccion' => 'required',
                'telefono' => 'required',
                'categoria' => '',
                'sweetalert' => 'required'
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
           
            
            return redirect(route('distribuidor.index'));
        }
        return redirect(route('index'));
    }


    public function show(User $distribuidor)
    {
        //

        
    }


    public function edit(User $distribuidor)
    {
        //
        if (Gate::allows('Gerente-Administrador')) {
            $categorias = TipoUsuario::all(['id', 'puesto']);
            return view('distribuidores.edit', compact('categorias', 'distribuidor'));
        }
        return redirect(route('index'));
    }



    public function update(Request $request, User $distribuidor)
    {
        if (Gate::allows('Gerente-Administrador')) {
            //validamos los campos para meterlos en la base de datos
            $data = request()->validate([
                'nombre' => 'required | min:4',
                'apellido' => 'required',
                'email' => 'required | email',
                'direccion' => '',
                'telefono' => 'required',
                'categoria' => 'required',
                //'imagen'=>'image',

            ]);

            //asignamos los campos que deseamos actualizar
            $distribuidor->name = $data['nombre'];
            $distribuidor->last_name = $data['apellido'];
            $distribuidor->email = $data['email'];
            $distribuidor->direccion = $data['direccion'];
            $distribuidor->telefono = $data['telefono'];
            $distribuidor->tipo_usuario_id = $data['categoria'];

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
        return redirect(route('index'));
    }


    public function destroy(User $distribuidor)
    {
        if (Gate::authorize('Gerente')) {
            $distribuidor->delete();
            return redirect(action('DistribuidorController@index'));
        }

        return redirect(action("DistribuidorController@index"));
    }
}
