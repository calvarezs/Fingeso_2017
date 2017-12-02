<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudApelacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_apelaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('carta_apelacion');
            $table->string('informacion');

            $table->integer('apelacion_id');

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
        Schema::dropIfExists('solicitud_apelaciones');
    }
}
