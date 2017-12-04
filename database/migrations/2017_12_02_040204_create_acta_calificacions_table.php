<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_calificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre')->nullable(); 
            $table->Date('fecha')->nullable(); 
            $table->String('Departamento')->nullable();
            $table->double('Puntaje_Departamento', 2, 1)->nullable();
            $table->double('Puntaje_Facultad', 2, 1)->nullable();
            $table->double('Puntaje_Promedio', 2, 1)->nullable(); 
            $table->String('informacion')->nullable(); 
            $table->String('acta')->nullable(); 

            $table->integer('academico_id')->unsigned()->nullable();
            //$table->foreign('academico_id')->references('id')->on('academicos'); 
            
            $table->integer('comision_facultad_id')->unsigned()->nullable();
            //$table->foreign('comision_facultad_id')->references('id')->on('comision_facultad'); 

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
        Schema::dropIfExists('acta_calificacion');
    }
}
