<?php

use Illuminate\Database\Seeder;
use App\HistorialActividades;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HistorialActividades::unguard();
        $this->call(HistorialActividadesSeeder::class);
        HistorialActividades::reguard();
    }
}
