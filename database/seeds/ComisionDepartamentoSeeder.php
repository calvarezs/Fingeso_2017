<?php

use Illuminate\Database\Seeder;
use App\ComisionDepartamento;

class ComisionDepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComisionDepartamento::create([ 
            'id'                    => 2, 
            'nombre'                => 'Marcela', 
            'id_user'               => 2,
            'correo'                => 'marcela@departamento.cl',
            'director_departamento' => 'Marcela'
        ]); 
    }
}
