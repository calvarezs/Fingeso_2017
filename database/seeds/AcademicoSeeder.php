<?php

use Illuminate\Database\Seeder;
use App\Academico;

class AcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Academico::create([
            'id'                        => 1,  
            'nombre'                    => 'juan',  
            'correo'                    => 'juan@academico.cl', 
            'directores_id'             => 1,
            'id_user'                   => 4,
        ]); 
    }
}
