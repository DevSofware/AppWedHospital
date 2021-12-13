<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->bigInteger('id_paciente');
            $table->bigInteger('id_medico');
            $table->foreign('id_paciente')->references('id')->on('Pacientes');
            $table->foreign('id_medico')->references('id')->on('medicos');
            $table->string('Tratamiento',100)->nullable();
            $table->primary('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimientos');
    }
}
