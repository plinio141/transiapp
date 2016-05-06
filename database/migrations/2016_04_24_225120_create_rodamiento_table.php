<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRodamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rodamientos', function (Blueprint $table) {
            $table->date('fecha_salida');
            $table->string('placa'); 
            $table->foreign('placa')->references('placa')->on('buses');
            $table->integer('id_ruta'); 
            $table->foreign('id_ruta')->references('id_ruta')->on('rutas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Rodamiento');
    }
}