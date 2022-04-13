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
            'nombre_frente'=>'PALOMAS',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );

        DB::table('frentes')->insert([
            'nombre_frente'=>'LO QUE DIOS UNE',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );

        DB::table('frentes')->insert([
            'nombre_frente'=>'CENTENARIO',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        DB::table('frentes')->insert([
            'nombre_frente'=>'MAXIMILIANO',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        DB::table('frentes')->insert([
            'nombre_frente'=>'NOVIOS',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        DB::table('frentes')->insert([
            'nombre_frente'=>'ANILLOS',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        DB::table('frentes')->insert([
            'nombre_frente'=>'CORAZON',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );  DB::table('frentes')->insert([
            'nombre_frente'=>'VALORES UNIVERSALES',
            'tipo_frente'=>'NR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        //religiosos

        DB::table('frentes')->insert([
            'nombre_frente'=>'CRUCIFIJO',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'MADONA',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'MADONA BRAZOS CRUZADOS',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'VIRGEN DE GUADALUPE',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'SAGRADO CORAZON',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'SAN BENITO',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'DOLOROSA',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        DB::table('frentes')->insert([
            'nombre_frente'=>'ESPITU SANTO',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );

        
        DB::table('frentes')->insert([
            'nombre_frente'=>'DIVINO ROSTRO',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );
        
        DB::table('frentes')->insert([
            'nombre_frente'=>'MILAGROSA',
            'tipo_frente'=>'R',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
        );

    }
}
