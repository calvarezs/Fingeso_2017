<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->String('titulo')->nullable(); 
            $table->String('detalles_actividad')->nullable(); 
            $table->String('tipo_actividad')->nullable(); 
            $table->String('ubicacion')->nullable(); 
            $table->Date('fecha')->nullable(); 
            $table->Time('Hora')->nullable(); 
            $table->String('documento')->nullable();  
            $table->Date('fecha_creacion')->nullable(); 
            $table->String('autor_documento')->nullable();  
            $table->String('video')->nullable(); 
            $table->Date('fecha_creacion_video')->nullable();  
            $table->String('autor_video')->nullable();  
            $table->String('privacidad')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_actividades');
    }
}
