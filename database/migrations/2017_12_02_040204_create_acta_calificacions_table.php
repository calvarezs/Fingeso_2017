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
            $table->integer('calificacion');  
            $table->String('informacion'); 
            $table->String('acta'); 

            $table->integer('academico_id')->unsigned();
            $table->foreign('academico_id')->references('id')->on('academicos'); 
            
            $table->integer('comision_facultad_id')->unsigned();
            $table->foreign('comision_facultad_id')->references('id')->on('comision_facultad'); 

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
