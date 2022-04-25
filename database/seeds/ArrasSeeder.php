<?php

use App\size;
use App\metal;
use App\frente;
use App\vuelta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //sacamos los datos de frente 
       $frentes = frente::all();
       //sacamos los datos de vuelta
       $vueltas = vuelta::all();
       //sacamos los datos de tamaño
       $sizes = size::all();
       //sacamos los datos de metal
       $metals = metal::all();
        $contador=0;
       foreach ($frentes as $frente) {
           
            foreach ($vueltas as  $vuelta) {
                foreach ($sizes as $size) {
                    foreach ($metals as $metal) {
                        $contador++;
                        DB::table('arras')->insert([
                            'clave' => 'ARRDEM0'.$contador,
                            'nombre'=> 'Arra '.$frente->nombre_frente.'/'.$vuelta->nombre_vuelta.'/'.$size->diametro.'mm/'.$metal->nombre_metal , 
                            'imgFrente'=>'upload-arras/Religiosas/'.$frente->nombre_frente.'.png',
                            'imgFrente2'=>'upload-arras/Religiosas/'.$frente->nombre_frente.'2.png',
                            'imgVuelta'=>'upload-arras/vueltas/'.$vuelta->nombre_vuelta.'.png',
                            'imgVuelta2'=>'upload-arras/vueltas/'.$vuelta->nombre_vuelta.'2.png',
                            'imgOpcional'=>'upload-arras/Valores/Fe.png',
                            'peso'=>1,
                            'precio'=>1,
                            'grosor'=>1,
                            'metales_id'=>$metal->id,
                            'frentes_id'=>$frente->id,
                            'size_id'=>$size->id,
                            'vueltas_id'=>$vuelta->id,
                        ]);

                    }
                }
            }  

       }
        
    }
}
