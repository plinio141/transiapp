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
   
 

    DB::table('administradores')->insert([
        'id' =>1,
        'name'=>'admin',
        'password' => bcrypt('1234'),
        'nombre_administrador' => 'admin',
        'apellido_administrador' => 'admin',
     ]);
    }
    
}
