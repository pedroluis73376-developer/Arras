<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informacions')->insert([
            'imgH1' => 'upload-arras/arras1.png',
            'imgH2' => 'upload-arras/arras2.png',
            'imgH3' => 'upload-arras/arras3.png',
            'esloganH1' => 'hola',
            'esloganH2' => 'probando',
            'esloganH3' => 'funciones',
            'imgMV1' => 'upload-arras/arras1.png',
            'imgMV2' => 'upload-arras/arras2.png',
            'imgMV3' => 'upload-arras/arras3.png',
            'descripcion1' => 'aqui puedes poner la descripcion del producto',
            'arra_id1' => '1',
            'imgMV4' => 'upload-arras/arras1.png',
            'imgMV5' => 'upload-arras/arras2.png',
            'imgMV6' => 'upload-arras/arras3.png',
            'descripcion2' => 'aqui puedes poner la descripcion del producto',
            'arra_id2' => '2',
            'imgMV7' => 'upload-arras/arras1.png',
            'imgMV8' => 'upload-arras/arras1.png',
            'imgMV9' => 'upload-arras/arras1.png',
            'descripcion3' => 'aqui puedes poner la descripcion del producto',
            'arra_id3' => '3',
            'titulo' =>'Asigna algun titulo al contenido',
            'descripcion4' =>'aqui puedes poner la descripcion del producto',
            'imgF1' =>'upload-arras/prueba.png',
            'imgF2' =>'upload-arras/prueba1.png',
            'imgF3' =>'upload-arras/prueba2.png',
            'titulo2' =>'Asigna algun titulo al contenido',
            'descripcion5' =>'aqui puedes poner la descripcion del producto',
            'imgF4' =>'upload-arras/prueba.png',
            'imgF5' =>'upload-arras/prueba1.png',
            'imgF6' =>'upload-arras/prueba2.png',

        ]);
    }
}
