<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosSeeder::class);
        $this->call(FrenteSeeder::class);
        $this->call(MetalesSeeder::class);
        $this->call(SizesSeeder::class);
        $this->call(VueltasSeeder::class);
        $this->call(ArrasSeeder::class);
    

        // $this->call(UsersTableSeeder::class);
    }
}
