<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rutas', function (Blueprint $table) {
            $table->integer('id_ruta');
            $table->integer('id_lugar');
            $table->foreign('id_lugar')->references('id_lugar')->on('lugares');
            $table->integer('pos_id_lugar');
            $table->foreign('pos_id_lugar')->references('id_lugar')->on('lugares');
            $table->string('nombre_ruta');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->integer('tarifa');
            $table->string('descripcion');
            $table->boolean('activa');
            
            $table->primary('id_ruta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Rutas');
    }
}