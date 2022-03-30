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
                            'imgFrente'=>'upload-arras/f2ZzfQdRhEjmYC0ic0A8pKUe95tBsXpErcFT6qdV.png',
                            'imgVuelta'=>'upload-arras/jk33xhlKjFmGolux3nTrCfxumuC9CMYgHovopE1K.png',
                            'imgOpcional'=>'upload-arras/PD5nTeUPu0DWo9DUYKOzesqeopXo7hdkOfyxF7e1.png',
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
