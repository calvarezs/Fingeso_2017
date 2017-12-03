<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'                    => 1, 
            'name'                  => 'Zolezzi', 
            'tipo'                  => 1,
            'email'                 => 'zolezzi@director.cl',
            'password'              => bcrypt('123456')  
        ]); 
        
        User::create([
            'id'                    => 2, 
            'name'                  => 'Marcela', 
            'tipo'                  => 2,
            'email'                 => 'marcela@departamento.cl',
            'password'              => bcrypt('123456')
        ]);  

        User::create([
            'id'                    => 3, 
            'name'                  => 'Ernesto', 
            'tipo'                  => 3,
            'email'                 => 'ernesto@facultad.cl',
            'password'              => bcrypt('123456')
        ]);  

        User::create([
            'id'                    => 4, 
            'name'                  => 'juan', 
            'tipo'                  => 4,
            'email'                 => 'juan@academico.cl',
            'password'              => bcrypt('123456')
        ]);
    }
}
