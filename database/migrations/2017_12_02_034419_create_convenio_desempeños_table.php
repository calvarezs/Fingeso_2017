<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvenioDesempeñosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenio_desempeño', function (Blueprint $table) {
            $table->increments('id'); 
            $table->dateTime('fecha_creacion');
            $table->date('periodo');
            $table->string('version');
            $table->text('informacion');
            $table->text('curso_a_impartir_1')->nullable();
            $table->integer('horas_curso_1')->nullable();
            $table->text('curso_a_impartir_2')->nullable();
            $table->integer('horas_curso_2')->nullable();
            $table->text('curso_a_impartir_3')->nullable();
            $table->integer('horas_curso_3')->nullable();
            $table->text('curso_a_impartir_4')->nullable();
            $table->integer('horas_curso_4')->nullable();
            $table->text('curso_a_impartir_5')->nullable();
            $table->integer('horas_curso_5')->nullable();
            $table->text('curso_a_impartir_6')->nullable();
            $table->integer('horas_curso_6')->nullable();
            $table->text('curso_a_impartir_7')->nullable();
            $table->integer('horas_curso_7')->nullable();
            $table->text('curso_a_impartir_8')->nullable();
            $table->integer('horas_curso_8')->nullable();
            $table->text('cargo_realizable_1')->nullable();
            $table->integer('horas_cargo_1')->nullable();
            $table->text('cargo_realizable_2')->nullable();
            $table->integer('horas_cargo_2')->nullable();
            $table->text('cargo_realizable_3')->nullable();
            $table->integer('horas_cargo_3')->nullable();
            $table->text('cargo_realizable_4')->nullable();
            $table->integer('horas_cargo_4')->nullable();
            $table->text('cargo_realizable_5')->nullable();
            $table->integer('horas_cargo_5')->nullable();
            $table->text('cargo_realizable_6')->nullable();
            $table->integer('horas_cargo_6')->nullable();
            $table->text('cargo_realizable_7')->nullable();
            $table->integer('horas_cargo_7')->nullable();
            $table->text('cargo_realizable_8')->nullable();
            $table->integer('horas_cargo_8')->nullable();

            $table->integer('director_id')->unsigned();
            $table->foreign('director_id')->references('id')->on('directores');

            $table->integer('comision_departamentos_id')->unsigned();
            $table->foreign('comision_departamentos_id')->references('id')->on('comision_departamento');

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
        Schema::dropIfExists('convenio_desempeño');
    }
}
