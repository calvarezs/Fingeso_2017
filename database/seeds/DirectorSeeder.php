<?php

use Illuminate\Database\Seeder;
use App\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Director::create([ 
            'id'                    => 1, 
            'nombre'                => 'Zolezzi', 
            'id_user'               => 1,
            'fecha_inicio_cargo'    => '2017-12-03',
            'fecha_termino_cargo'   => '2020-12-03',
        ]); 
    }
}
