<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< Updated upstream:back-end/database/migrations/2021_12_11_233646_create_habitaciones_table.php
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->enum('Estado', ['Libre', 'Ocupado','Mantenimiento'])->nullable()->default('Libre');
=======
        Schema::create('habitacions', function (Blueprint $table) {
            $table->id('id');
            $table->enum('Estado', ['Libre', 'Ocupado','Mantenimiento'])->nullable()->default('Libre');
            $table->bigInteger('id_paciente');
          //  $table->foreign('id_paciente')->references('id')->on('Pacientes');


>>>>>>> Stashed changes:back-end/database/migrations/2021_12_12_034448_create_habitacions_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
