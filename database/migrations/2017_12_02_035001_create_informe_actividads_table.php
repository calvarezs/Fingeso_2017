<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('informacion'); 
            $table->date('periodo');
            $table->date('fecha_emision');

            $table->integer('academico_id')->unsigned();
            $table->foreign('academico_id')->references('id')->on('academicos'); 

            $table->integer('comision_facultad_id')->unsigned();
            $table->foreign('comision_facultad_id')->references('id')->on('comision_facultad'); 

            $table->integer('comision_departamento_id')->unsigned();
            $table->foreign('comision_departamento_id')->references('id')->on('comision_departamento'); 

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
        Schema::dropIfExists('informe_actividades');
    }
}
