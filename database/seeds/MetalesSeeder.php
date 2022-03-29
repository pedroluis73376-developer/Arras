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
            'nombre_metal' => 'imitacion plata',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'imitacion oro',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'plata con baño de oro',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'plata con baño de rodio',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'oro amarillo 10kt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'oro blanco 10kt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'oro amarillo 14kt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'oro blanco 14kt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
        DB::table('metals')->insert([
            'nombre_metal' => 'oro 24kt',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         

        ]);
    }
}
