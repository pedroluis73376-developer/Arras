<?php

namespace App\Http\Controllers;

use App\User;
use App\Contacto;
use App\TipoUsuario;
use App\cotizaciones;
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
            $categorias = TipoUsuario::all(['id', 'puesto'])->where('id', '>', 3);
            $distribuidores = User::all();
            return view('distribuidores.index', compact('distribuidores', 'categorias'));
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
                'password' => Hash::make('12345678'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            //redireccionamos despues de agregar los valores a la base de datos


            return redirect(route('distribuidor.index'));
        }
        return redirect(route('index'));
    }


    public function show(User $distribuidor)
    {
        //
        if (Gate::allows('Gerente-Administrador')) {

            //realizamos el conteo de nuestras cotizaciones durante los meses
            $cotizaciones = cotizaciones::select(DB::raw("COUNT(*) as count"))
                ->where('id_usuario', $distribuidor->id)
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');

            $months = cotizaciones::select(DB::raw("Month(created_at) as month"))
                ->where('id_usuario', $distribuidor->id)
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month');
            $datas = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

            foreach ($months as $index => $month) {

                $datas[$month - 1] = $cotizaciones[$index];
            }



            //realizamos el conteo de los metales mas vendidos

            $cotizaciones2 = cotizaciones::all()
                ->where('id_usuario', $distribuidor->id);
            $datas2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
            foreach ($cotizaciones2 as $cotizacion) {

                switch ($cotizacion->arra->metal->id) {
                    case '1':
                        $datas2[0] = $datas2[0] + 1;
                        break;
                    case '2':
                        $datas2[1] = $datas2[1] + 1;
                        break;
                    case '3':
                        $datas2[2] = $datas2[2] + 1;
                        break;
                    case '4':
                        $datas2[3] = $datas2[3] + 1;
                        break;
                    case '5':
                        $datas2[4] = $datas2[4] + 1;
                        break;
                    case '6':
                        $datas2[5] = $datas2[5] + 1;
                        break;
                    case '7':
                        $datas2[6] = $datas2[6] + 1;
                        break;
                    case '8':
                        $datas2[7] = $datas2[7] + 1;
                        break;
                    case '9':
                        $datas2[8] = $datas2[8] + 1;
                        break;
                    default:
                        # code...
                        break;
                }
            }

            return view('distribuidores.show', compact('datas', 'datas2', 'distribuidor'));
        }
        return redirect(route('index'));
    }




    public function edit(User $distribuidor)
    {
        
            $categorias = TipoUsuario::all(['id', 'puesto']);
            return view('distribuidores.edit', compact('categorias', 'distribuidor'));
      
    }

    public function update_user(Request $request, User $distribuidor)
    {
         //validamos los campos para meterlos en la base de datos
         $data = request()->validate([
            'nombre' => 'required | min:4',
            'apellido' => 'required',
            'email' => 'required | email',
            'direccion' => '',
            'telefono' => 'required',
            //'imagen'=>'image',

        ]);

        //asignamos los campos que deseamos actualizar
        $distribuidor->name = $data['nombre'];
        $distribuidor->last_name = $data['apellido'];
        $distribuidor->email = $data['email'];
        $distribuidor->direccion = $data['direccion'];
        $distribuidor->telefono = $data['telefono'];
        $distribuidor->updated_at = date('Y:m:d H:i:s');

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
        return redirect(route('distribuidor.edit', ['distribuidor' => auth()->user()->id]));

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
            $distribuidor->updated_at = date('Y:m:d H:i:s');

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
