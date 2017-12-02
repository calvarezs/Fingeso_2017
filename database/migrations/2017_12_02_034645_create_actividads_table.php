<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->Date('fecha');
            $table->String('lugar');
            $table->String('descripcion'); 

            $table->integer('academico_id')->unsigned();
            $table->foreign('academico_id')->references('id')->on('academicos'); 

            $table->integer('informe_actividades_id')->unsigned();
            $table->foreign('informe_actividades_id')->references('id')->on('informe_actividades'); 

            $table->integer('convenio_desempeño_id')->unsigned();
            $table->foreign('convenio_desempeño_id')->references('id')->on('convenio_desempeño'); 

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
        Schema::dropIfExists('actividades');
    }
}
