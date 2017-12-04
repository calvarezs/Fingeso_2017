<?php

use Illuminate\Database\Seeder;
use App\ActaCalificacion;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActaCalificacion::create([
            'id'                        => 1,  
            'nombre'                    => 'Pedro',
            'fecha'                     => '2017-09-11',
            'Departamento'              => 'DIINF',
            'Puntaje_Departamento'      => 9.5,
            'Puntaje_Facultad'          => 5.4,
            'Puntaje_Promedio'          => 2.3, 
            'Puntaje_Apelacion'         => 4.5,
            'estado'                    => 0,
            'academico_id'              => 4
        ]);
        
        ActaCalificacion::create([
            'id'                        => 2,  
            'nombre'                    => 'Matias',
            'fecha'                     => '2017-09-11',
            'Departamento'              => 'DIINF',
            'Puntaje_Departamento'      => 9.5,
            'Puntaje_Facultad'          => 5.4,
            'Puntaje_Promedio'          => 2.3, 
            'Puntaje_Apelacion'         => 4.5,
            'estado'                    => 0,
            'academico_id'              => 4
        ]); 

        ActaCalificacion::create([
            'id'                        => 3,  
            'nombre'                    => 'Filomeno',
            'fecha'                     => '2017-09-11',
            'Departamento'              => 'DIINF',
            'Puntaje_Departamento'      => 9.5,
            'Puntaje_Facultad'          => 5.4,
            'Puntaje_Promedio'          => 2.3, 
            'Puntaje_Apelacion'         => 4.5,
            'estado'                    => 1,
            'academico_id'              => 4
        ]); 

        ActaCalificacion::create([
            'id'                        => 4,  
            'nombre'                    => 'Pedro',
            'fecha'                     => '2017-09-11',
            'Departamento'              => 'DIINF',
            'Puntaje_Departamento'      => 9.5,
            'Puntaje_Facultad'          => 5.4,
            'Puntaje_Promedio'          => 2.3, 
            'Puntaje_Apelacion'         => 4.5,
            'estado'                    => 2,
            'academico_id'              => 4
        ]); 
    }
}
