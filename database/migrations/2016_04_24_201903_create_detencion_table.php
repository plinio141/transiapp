<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetencionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Detenciones', function (Blueprint $table) {
            $table->time('tiempo_detenido');
            $table->string('placa'); 
            $table->foreign('placa')->references('placa')->on('buses');
            $table->integer('id_punto'); 
            $table->foreign('id_punto')->references('id_punto')->on('PuntosEstrategicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Detenciones');
    }
}
