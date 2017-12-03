<?php

use Illuminate\Database\Seeder;
use App\ComisionFacultad;

class ComisionFacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComisionFacultad::create([ 
            'id'                    => 1, 
            'nombre'                => 'Ernesto', 
            'id_user'               => 3,
            'correo'                => 'ernesto@facultad.cl',
            'decano'                => 'Ernesto' 
        ]); 
    }
}
