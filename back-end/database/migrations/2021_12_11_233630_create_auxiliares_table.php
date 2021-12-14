<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuxiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< Updated upstream:back-end/database/migrations/2021_12_11_233630_create_auxiliares_table.php
        Schema::create('auxiliares', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre',100)->nullable();
            $table->string('Apellido',100)->nullable();
            $table->Integer('CC')->unsigned()->nullable();
=======
        Schema::create('auxiliars', function (Blueprint $table) {
            $table->id('id');            $table->string('Nombre',100)->nullable();
            $table->string('Apellido',100)->nullable();
            $table->Integer('CC')->nullable();
            $table->bigInteger('id_user');
          //  $table->foreign('id_user')->references('id')->on('usuarios');


>>>>>>> Stashed changes:back-end/database/migrations/2021_12_12_034500_create_auxiliars_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auxiliares');
    }
}
