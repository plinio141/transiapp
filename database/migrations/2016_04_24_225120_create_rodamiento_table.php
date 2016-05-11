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
            $table->integer('id_bus'); 
            $table->foreign('id_bus')->references('id_bus')->on('buses');
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