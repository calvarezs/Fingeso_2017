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
            $table->String('nombre')->nullable(); 
            $table->Date('fecha')->nullable(); 
            $table->double('calificacion', 2, 1)->nullable(); 

            $table->text('informacion')->nullable(); 
            $table->string('acta')->nullable(); 

            $table->integer('academico_id')->unsigned()->nullable();
            //$table->foreign('academico_id')->references('id')->on('academicos'); 

            $table->integer('comision_facultad_id')->unsigned()->nullable();
            //$table->foreign('comision_facultad_id')->references('id')->on('comision_facultad');

            $table->integer('comision_departamento_id')->unsigned()->nullable();
            //$table->foreign('comision_departamento_id')->references('id')->on('comision_departamento');

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
