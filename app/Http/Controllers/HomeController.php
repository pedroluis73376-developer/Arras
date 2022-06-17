<?php

namespace App\Http\Controllers;

use App\arra;
use App\size;
use App\User;
use App\metal;
use App\frente;
use App\vuelta;
use App\Contacto;
use App\Informacion;
use App\cotizaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function welcome()
    {
        $informacion = Informacion::all();
        return view('welcome', compact('informacion'));
    }

    public function welcomeADM()
    {
        $informacion = Informacion::all();
        $metales = metal::all();
        $frentes = frente::all();
        $sizes = size::all();
        $vueltas = vuelta::all();
        return view('welcomeADM', compact('informacion','metales','frentes','sizes','vueltas'));
    }

    //editamos el encabezado de nuestro sitio
    public function updateHeader(Request $request, Informacion $informacion)
    {
        $data = request()->validate([
            'imgH1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgH2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgH3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'esloganH1' => 'required',
            'esloganH2' => 'required',
            'esloganH3' => 'required',
        ]);

        if ($request['imgH1']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgH1;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgH1 = $request->imgH1->store('upload-arras', 'public');
            $informacion->imgH1 = $imgH1;
        }
        if ($request['imgH2']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgH2;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgH2 = $request->imgH2->store('upload-arras', 'public');
            $informacion->imgH2 = $imgH2;
        }
        if ($request['imgH3']) {
             //eliminamos el archivo del servidor
             $url = 'public/'.$informacion->imgH3;
             Storage::delete($url);
             //subimos nuestro nuevo archivo
             $imgH3 = $request->imgH3->store('upload-arras', 'public');
             $informacion->imgH3 = $imgH3;
        }

        $informacion->esloganH1 = $data['esloganH1'];
        $informacion->esloganH2 = $data['esloganH2'];
        $informacion->esloganH3 = $data['esloganH3'];

        $informacion->save();
        return redirect(route('informacion.index'));
    }

    //editamos la seccion de lo mas vendido
    public function updateLMV1(Request $request, Informacion $informacion)
    {
        $data = request()->validate([
            'imgMV1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgMV2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgMV3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'descripcion1' => 'required',
            'metal_id' => 'required',
            'frente_id' => 'required',
            'size_id' => 'required',
            'vuelta_id' => 'required',
        ]);

        if ($request['imgMV1']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgMV1;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgMV1 = $request->imgMV1->store('upload-arras', 'public');
            $informacion->imgMV1 = $imgMV1;
        }
        if ($request['imgMV2']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgMV2;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgMV2 = $request->imgMV2->store('upload-arras', 'public');
            $informacion->imgMV2 = $imgMV2;
        }
        if ($request['imgMV3']) {
             //eliminamos el archivo del servidor
             $url = 'public/'.$informacion->imgMV3;
             Storage::delete($url);
             //subimos nuestro nuevo archivo
             $imgMV3 = $request->imgMV3->store('upload-arras', 'public');
             $informacion->imgMV3 = $imgMV3;
        }

        //obtenemos el id de la arra
        $arra =DB::table('arras')->where('frentes_id',$data['frente_id'])
        ->where('metales_id', $data['metal_id'])
        ->where('size_id',$data['size_id'])
        ->where('vueltas_id', $data['vuelta_id'])
        ->value('id');
        
      

        $informacion->descripcion1= $data['descripcion1'];
        $informacion -> arra_id1 =$arra; 
        $informacion->save();
        return redirect(route('informacion.index'));
    }
    public function updateLMV2(Request $request, Informacion $informacion)
    {
        $data = request()->validate([
            'imgMV4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgMV5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgMV6' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'descripcion2' => 'required',
            'metal_id' => 'required',
            'frente_id' => 'required',
            'size_id' => 'required',
            'vuelta_id' => 'required',
        ]);

        if ($request['imgMV4']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgMV4;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgMV4 = $request->imgMV4->store('upload-arras', 'public');
            $informacion->imgMV4 = $imgMV4;
        }
        if ($request['imgMV5']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgMV5;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgMV5 = $request->imgMV5->store('upload-arras', 'public');
            $informacion->imgMV5 = $imgMV5;
        }
        if ($request['imgMV6']) {
             //eliminamos el archivo del servidor
             $url = 'public/'.$informacion->imgMV6;
             Storage::delete($url);
             //subimos nuestro nuevo archivo
             $imgMV6 = $request->imgMV6->store('upload-arras', 'public');
             $informacion->imgMV6 = $imgMV6;
        }

        //obtenemos el id de la arra
        $arra =DB::table('arras')->where('frentes_id',$data['frente_id'])
        ->where('metales_id', $data['metal_id'])
        ->where('size_id',$data['size_id'])
        ->where('vueltas_id', $data['vuelta_id'])
        ->value('id');
        
      

        $informacion->descripcion2= $data['descripcion2'];
        $informacion -> arra_id2 =$arra; 
        $informacion->save();
        return redirect(route('informacion.index'));
    }
    public function updateLMV3(Request $request, Informacion $informacion)
    {
        $data = request()->validate([
            'imgMV7' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgMV8' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgMV9' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'descripcion3' => 'required',
            'metal_id' => 'required',
            'frente_id' => 'required',
            'size_id' => 'required',
            'vuelta_id' => 'required',
        ]);

        if ($request['imgMV7']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgMV7;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgMV7 = $request->imgMV7->store('upload-arras', 'public');
            $informacion->imgMV7 = $imgMV7;
        }
        if ($request['imgMV8']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgMV8;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgMV8 = $request->imgMV8->store('upload-arras', 'public');
            $informacion->imgMV8 = $imgMV8;
        }
        if ($request['imgMV9']) {
             //eliminamos el archivo del servidor
             $url = 'public/'.$informacion->imgMV9;
             Storage::delete($url);
             //subimos nuestro nuevo archivo
             $imgMV9 = $request->imgMV9->store('upload-arras', 'public');
             $informacion->imgMV9 = $imgMV9;
        }

        //obtenemos el id de la arra
        $arra =DB::table('arras')->where('frentes_id',$data['frente_id'])
        ->where('metales_id', $data['metal_id'])
        ->where('size_id',$data['size_id'])
        ->where('vueltas_id', $data['vuelta_id'])
        ->value('id');
        
      

        $informacion->descripcion3= $data['descripcion3'];
        $informacion -> arra_id3 =$arra; 
        $informacion->save();
        return redirect(route('informacion.index'));
    }
    //editamos la seccion de footer para poner contenido
    public function updateFotter1(Request $request, Informacion $informacion)
    {
        $data = request()->validate([
            'imgF1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgF2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgF3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'descripcion4' => 'required',
            'titulo' => 'required',
        
        ]);

        if ($request['imgF1']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgF1;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgF1 = $request->imgF1->store('upload-arras', 'public');
            $informacion->imgF1 = $imgF1;
        }
        if ($request['imgF2']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgF2;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgF2 = $request->imgF2->store('upload-arras', 'public');
            $informacion->imgF2 = $imgF2;
        }
        if ($request['imgF3']) {
             //eliminamos el archivo del servidor
             $url = 'public/'.$informacion->imgF3;
             Storage::delete($url);
             //subimos nuestro nuevo archivo
             $imgF3 = $request->imgF3->store('upload-arras', 'public');
             $informacion->imgF3 = $imgF3;
        }
        
      

        $informacion->descripcion4= $data['descripcion4'];
        $informacion->titulo= $data['titulo'];
        $informacion->save();
        return redirect(route('informacion.index'));
    }
    public function updateFotter2(Request $request, Informacion $informacion)
    {
        $data = request()->validate([
            'imgF4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgF5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'imgF6' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'descripcion5' => 'required',
            'titulo2' => 'required',
        
        ]);

        if ($request['imgF4']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgF4;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgF4 = $request->imgF4->store('upload-arras', 'public');
            $informacion->imgF4 = $imgF4;
        }
        if ($request['imgF5']) {
            //eliminamos el archivo del servidor
            $url = 'public/'.$informacion->imgF5;
            Storage::delete($url);
            //subimos nuestro nuevo archivo
            $imgF5 = $request->imgF5->store('upload-arras', 'public');
            $informacion->imgF5 = $imgF5;
        }
        if ($request['imgF6']) {
             //eliminamos el archivo del servidor
             $url = 'public/'.$informacion->imgF6;
             Storage::delete($url);
             //subimos nuestro nuevo archivo
             $imgF6 = $request->imgF6->store('upload-arras', 'public');
             $informacion->imgF6 = $imgF6;
        }
        
      

        $informacion->descripcion5= $data['descripcion5'];
        $informacion->titulo2= $data['titulo2'];
        $informacion->save();
        return redirect(route('informacion.index'));
    }

    public function index()
    {
        if (Gate::allows('Gerente-Administrador')) {
            //asignamos las variables de conteo para le dashboard
            $distribuidor = User::select(DB::raw('COUNT(*) as count'))
                ->where('tipo_usuario_id', '>', '3')
                ->pluck('count');
            $cotizar = cotizaciones::select(DB::raw("COUNT(*) as count"))
                ->where('status', 'NR')
                ->pluck('count');

            $mensaje = Contacto::select(DB::raw('COUNT(*) as count'))
                ->where('status', 'NL')
                ->pluck('count');
            $arra = arra::select(DB::raw('COUNT(*) as count'))->pluck('count');


            //realizamos el conteo de nuestras cotizaciones durante los meses
            $cotizaciones = cotizaciones::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');

            $months = cotizaciones::select(DB::raw("Month(created_at) as month"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month');
            $datas = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            foreach ($months as $index => $month) {

                $datas[$month - 1] = $cotizaciones[$index];
            }

            //realizamos conteo de los distribuidores durante los meses
            $user = User::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->where('tipo_usuario_id', '>', '3')
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');

            $monthsUser = User::select(DB::raw("Month(created_at) as month"))
                ->whereYear('created_at', date('Y'))
                ->where('tipo_usuario_id', '>', '3')
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month');


            $datas3 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            foreach ($monthsUser as $index => $month) {

                $datas3[$month - 1] = $user[$index];
            }


            //realizamos el conteo de los metales mas vendidos

            $cotizaciones2 = cotizaciones::all();
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

            return view('home', compact('datas', 'datas2', 'datas3', 'distribuidor', 'cotizar', 'mensaje', 'arra'));
        }
        return redirect(route('index'));
    }
}
