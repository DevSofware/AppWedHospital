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
<<<<<<< Updated upstream
            $table->id();
            $table->string('Nombre',100)->nullable();
=======
            $table->id('id');            $table->string('Nombre',100)->nullable();
>>>>>>> Stashed changes
            $table->string('Apellido',100)->nullable();
            $table->Integer('Edad')->unsigned()->nullable();
<<<<<<< Updated upstream
            $table->enum('Estado', ['Tratamiento', 'Revicion','Finalizado'])->nullable()->default('Revicion');
=======
            $table->string('Motivo',400)->nullable();


>>>>>>> Stashed changes
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
