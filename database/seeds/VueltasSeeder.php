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
            'nombre_vuelta' => 'Adobe Caslon Pro',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'Lucida Handwriting',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'Sutro ExtraBold',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'Freestyle',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'Lucida Calligraphy',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'Yummi',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'Halimum',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('vueltas')->insert([
            'nombre_vuelta' => 'Edwardian',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        
    }
}
