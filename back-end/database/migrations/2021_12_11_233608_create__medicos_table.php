<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
<<<<<<< Updated upstream:back-end/database/migrations/2021_12_11_233608_create__medicos_table.php
            $table->id();
            $table->string('Nombre',100)->nullable();
            $table->string('Apellido',100)->nullable();
            $table->Integer('CC')->unsigned()->nullable();
=======
            $table->id('id');            $table->string('Nombre',100)->nullable();
            $table->string('Apellido',100)->nullable();
            $table->Integer('CC')->nullable();
            $table->bigInteger('id_user');
           // $table->foreign('id_user')->references('id')->on('usuarios');

>>>>>>> Stashed changes:back-end/database/migrations/2021_12_12_233608_create__medicos_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicos');
    }
}
