<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VueltasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'ADOBE CASLON PRO',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'LUCIDA HANDWRITING',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'SUTRO EXTRABOLD',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'FREESTYLE',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'LUCIDA CALLIGRAPHY',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'YUMMI',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'HALIMUM',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'EDWARDIAN',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        
    }
}
