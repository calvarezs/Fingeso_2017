<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaPrecalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_precalificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calificacion');  
            $table->text('informacion'); 
            $table->string('acta'); 

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
        Schema::dropIfExists('acta_precalificacion');
    }
}
