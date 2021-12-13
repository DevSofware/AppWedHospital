<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuxiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliars', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('Nombre',100)->nullable();
            $table->string('Apellido',100)->nullable();
            $table->Integer('CC')->nullable();
            $table->bigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('usuarios');
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
        Schema::dropIfExists('auxiliars');
    }
}
