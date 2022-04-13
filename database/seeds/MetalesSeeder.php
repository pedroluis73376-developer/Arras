<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metals')->insert([
            'nombre_metal' => 'IMITACION PLATA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'IMITACION ORO',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'PLATA CON BAÑO DE ORO',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'PLATA CON BAÑO DE RODIO',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'ORO AMARILLO 10kt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'ORO BLANCO 10kt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'ORO AMARILLO 14kt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'ORO BLANCO 14kt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'ORO 24kt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
    }
}
