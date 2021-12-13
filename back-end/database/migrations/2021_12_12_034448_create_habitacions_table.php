<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacions', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->enum('Estado', ['Libre', 'Ocupado','Mantenimiento'])->nullable()->default('Libre');
            $table->bigInteger('id_paciente');
            $table->foreign('id_paciente')->references('id')->on('Pacientes');
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
        Schema::dropIfExists('habitacions');
    }
}
