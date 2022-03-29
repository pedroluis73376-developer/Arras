<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //no religiosos 
        DB::table('frentes')->insert([
            'nombre_frente'=>'palomas',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );

        DB::table('frentes')->insert([
            'nombre_frente'=>'Lo que dios une',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );

        DB::table('frentes')->insert([
            'nombre_frente'=>'Centenario',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        DB::table('frentes')->insert([
            'nombre_frente'=>'Maximiliano',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        DB::table('frentes')->insert([
            'nombre_frente'=>'Novios',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        DB::table('frentes')->insert([
            'nombre_frente'=>'Anillos',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        DB::table('frentes')->insert([
            'nombre_frente'=>'Corazon',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );  DB::table('frentes')->insert([
            'nombre_frente'=>'Valores Universales',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        //religiosos

        DB::table('frentes')->insert([
            'nombre_frente'=>'Crucifijo',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'Madona',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'Madona Brazos Cruzados',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'Virgen de Guadalupe',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'Sagrado Corazon',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'San benito',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'Dolorosa',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        DB::table('frentes')->insert([
            'nombre_frente'=>'Espiritu Santo',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );

        
        DB::table('frentes')->insert([
            'nombre_frente'=>'Divino Rostro',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'Milagrosa',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );

    }
}
