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

            $table->integer('convenio_desempeno_id')->unsigned();
            $table->foreign('convenio_desempeno_id')->references('id')->on('convenio_desempeno'); 

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
