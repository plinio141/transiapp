<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Buses', function (Blueprint $table) {
            $table->string('placa');
            $table->integer('id_posicion');
            $table->foreign('id_posicion')->references('id_posicion')->on('posiciones');
            $table->integer('capacidad');
            $table->integer('id_gps');
            $table->string('estado');
            
            $table->primary('placa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Buses');
    }
}
