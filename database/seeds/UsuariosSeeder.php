<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //declaramos los tipos de usuarios en la tabla
            DB::table('tipo_usuarios')->insert([
                'puesto'=> 'Administrador',
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
            DB::table('tipo_usuarios')->insert([
                'puesto'=> 'vendedor mostrador',
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date ('Y-m-d H:i:s')
            ]);
            DB::table('tipo_usuarios')->insert([
                'puesto'=> 'Gerente',
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date ('Y-m-d H:i:s')
            ]);
            DB::table('tipo_usuarios')->insert([
                'puesto'=> 'zafiro',
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
            DB::table('tipo_usuarios')->insert([
                'puesto'=> 'ruby',
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
            DB::table('tipo_usuarios')->insert([
                'puesto'=> 'diamante',
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
            DB::table('tipo_usuarios')->insert([
                'puesto'=> 'esmeralda',
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
    
            //declaramos los usuarios por default en la base de datos
            //usuario con todos los privilegios
            DB::table('users')->insert([
                'name' => 'Cristofferson',
                'last_name'=> 'reyes Rodriguez',
                'email'=> 'Cristofferson@hotmail.com',
                'telefono'=> '5570131853',
                'imagen'=> '',
                'direccion'=> '',
                'tipo_usuario_id'=> '3',
                'password' => Hash::make('12345678'),
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
            //usuario de mostrador
            DB::table('users')->insert([
                'name' => 'Juan',
                'last_name'=> 'Perez',
                'email'=> 'juan@outlook.com',
                'telefono'=> '1234567008',
                'imagen'=> '',
                'direccion'=> '',
                'tipo_usuario_id'=> '2',
                'password' => Hash::make('12345678'),
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
    
            //usuario distribuidor
            DB::table('users')->insert([
                'name' => 'Pedro',
                'last_name'=> 'alejandre',
                'email'=> 'pedro@outlook.com',
                'telefono'=> '1234567800',
                'imagen'=> '',
                'direccion'=> '',
                'tipo_usuario_id'=>  '1',
                'password' => Hash::make('12345678'),
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);

            //usuarios distribuidores
            DB::table('users')->insert([
                'name' => 'zafiro',
                'last_name'=> 'alejandre',
                'email'=> 'za@outlook.com',
                'telefono'=> '4234234',
                'imagen'=> '',
                'direccion'=> '',
                'tipo_usuario_id'=>  '4',
                'password' => Hash::make('12345678'),
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
            DB::table('users')->insert([
                'name' => 'ruby',
                'last_name'=> 'alejandre',
                'email'=> 'ruby@outlook.com',
                'telefono'=> '534335',
                'imagen'=> '',
                'direccion'=> '',
                'tipo_usuario_id'=>  '5',
                'password' => Hash::make('12345678'),
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
            DB::table('users')->insert([
                'name' => 'Diamante',
                'last_name'=> 'alejandre',
                'email'=> 'dia@outlook.com',
                'telefono'=> '5434534',
                'imagen'=> '',
                'direccion'=> '',
                'tipo_usuario_id'=>  '6',
                'password' => Hash::make('12345678'),
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
            DB::table('users')->insert([
                'name' => 'oro',
                'last_name'=> 'alejandre',
                'email'=> 'oro@outlook.com',
                'telefono'=> '12345673458',
                'imagen'=> '',
                'direccion'=> '',
                'tipo_usuario_id'=>  '7',
                'password' => Hash::make('12345678'),
                'created_at'=> date ('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
    }
}
