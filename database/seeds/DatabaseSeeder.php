<?php

use Illuminate\Database\Seeder;
use App\HistorialActividades;
use App\User;
use App\ComisionFacultad;
use App\ComisionDepartamento;
use App\Director;
use App\Academico;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
        $this->call(UserSeeder::class);
        User::reguard();

        Director::unguard();
        $this->call(DirectorSeeder::class);
        Director::reguard();

        Academico::unguard();
        $this->call(AcademicoSeeder::class);
        Academico::reguard();

        ComisionDepartamento::unguard();
        $this->call(ComisionDepartamentoSeeder::class);
        ComisionDepartamento::reguard();

        ComisionFacultad::unguard();
        $this->call(ComisionFacultadSeeder::class);
        ComisionFacultad::reguard();

        HistorialActividades::unguard();
        //$this->call(HistorialActividadesSeeder::class);
        HistorialActividades::reguard();
    }
}
