<?php

use Illuminate\Database\Seeder;
use App\HistorialActividades;

class HistorialActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HistorialActividades::create([
            'id'                    => 1,
            'id_usuario'            => 1,
            'titulo'                => 'Presentación laravel',
            'detalles_actividad'    => 'Se presenta prototipo web', 
            'tipo_actividad'        =>  'Investigación',
            'ubicacion'             =>  'DIINF',
            'fecha'                 =>  '2015-03-08', 
            'Hora'                  =>   '04:05', 
            'fecha_creacion'        =>  '2017-01-08', 
            'autor_documento'       =>  'Maturana M. Artículo de la revista presentaciones geniales',   
            'fecha_creacion_video'  =>  '2017-01-08',   
            'autor_video'           =>  'Chico Trujillo',
            'privacidad'            =>  'Privado'
        ]); 

        HistorialActividades::create([
            'id'                    => 2,
            'id_usuario'            => 2,
            'titulo'                => 'Presentación laravel parte 2',
            'detalles_actividad'    => 'Se presenta prototipo web', 
            'tipo_actividad'        => 'Vinculación con el medio',
            'ubicacion'             =>  'DIINF',
            'fecha'                 =>  '2017-05-18', 
            'Hora'                  =>   '04:05', 
            'fecha_creacion'        =>  '2017-01-08', 
            'autor_documento'       =>  'Maturana M. Artículo de la revista presentaciones geniales',   
            'fecha_creacion_video'  =>  '2017-01-08',   
            'autor_video'           =>  'Chico Trujillo',
            'privacidad'            =>  'Publico'  
        ]);
      
        HistorialActividades::create([
            'id'                    => 3,
            'id_usuario'            => 3,
            'titulo'                => 'Presentación laravel parte 3',
            'detalles_actividad'    => 'Se presenta prototipo web', 
            'tipo_actividad'        => 'Academica',
            'ubicacion'             =>  'DIINF',
            'fecha'                 =>  '2017-01-08', 
            'Hora'                  =>   '04:05', 
            'fecha_creacion'        =>  '2017-01-08', 
            'autor_documento'       =>  'Maturana M. Artículo de la revista presentaciones geniales',   
            'fecha_creacion_video'  =>  '2017-01-08',   
            'autor_video'           =>  'Chico Trujillo',
            'privacidad'            =>  'Publico'  
        ]); 

        HistorialActividades::create([
            'id'                    => 4,
            'id_usuario'            => 4,
            'titulo'                => 'Investigación sobre tema X3',
            'detalles_actividad'    => 'Se presenta prototipo web', 
            'tipo_actividad'        => 'Investigación',
            'ubicacion'             =>  'Universidad de santiago',
            'fecha'                 =>  '2017-01-08', 
            'Hora'                  =>  '04:06', 
            'fecha_creacion'        =>  '2017-01-08', 
            'autor_documento'       =>  'Maturana M. Artículo de la revista presentaciones geniales',   
            'fecha_creacion_video'  =>  '2017-01-08',   
            'autor_video'           =>  'Chico Trujillo',
            'privacidad'            =>  'Publico'  
        ]);   

        HistorialActividades::create([
            'id'                    => 5,
            'id_usuario'            => 1,
            'titulo'                => 'Investigación sobre tema Y3',
            'detalles_actividad'    => 'Se presenta prototipo web', 
            'tipo_actividad'        => 'Investigación',
            'ubicacion'             =>  'Universidad de santiago',
            'fecha'                 =>  '2017-01-08', 
            'Hora'                  =>   '05:06', 
            'fecha_creacion'        =>  '2017-01-08', 
            'autor_documento'       =>  'Maturana M. Artículo de la revista presentaciones geniales',   
            'fecha_creacion_video'  =>  '2017-01-08',   
            'autor_video'           =>  'Chico Trujillo',
            'privacidad'            =>  'Publico'  
        ]);  
        
        HistorialActividades::create([
            'id'                    => 6,
            'id_usuario'            => 2,
            'titulo'                => 'Exposición en colegio',
            'detalles_actividad'    => 'Se presenta prototipo web', 
            'tipo_actividad'        => 'Vinculación con el medio',
            'ubicacion'             =>  'Colegio Santa cruz',
            'fecha'                 =>  '2017-10-21', 
            'Hora'                  =>  '17:00', 
            'fecha_creacion'        =>  '2017-01-08', 
            'autor_documento'       =>  'Maturana M. Artículo de la revista presentaciones geniales',   
            'fecha_creacion_video'  =>  '2017-01-08',   
            'autor_video'           =>  'Chico Trujillo',
            'privacidad'            =>  'Privado'  
        ]);  
    }
}
