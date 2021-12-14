<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pacientes', function (Blueprint $table) {
            $table->id('id');
            $table->string('Nombre', 100)->nullable();
            $table->string('Apellido', 100)->nullable();
            $table->Integer('Edad')->unsigned()->nullable();
            $table->string('Motivo', 400)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pacientes');
    }
}
