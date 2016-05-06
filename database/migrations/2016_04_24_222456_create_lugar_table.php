<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lugares', function (Blueprint $table) {
            $table->integer('id_lugar');
            $table->string('nombre_lugar');
            $table->integer('id_posicion');
            $table->foreign('id_posicion')->references('id_posicion')->on('posiciones');

            $table->primary('id_lugar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Lugares');
    }
}
