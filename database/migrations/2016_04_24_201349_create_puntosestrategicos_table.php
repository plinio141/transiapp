<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntosEstrategicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PuntosEstrategicos', function (Blueprint $table) {
            $table->integer('id_punto');
            $table->string('nombre_punto');
            $table->integer('id_posicion');
            $table->foreign('id_posicion')->references('id_posicion')->on('posiciones');
            
            $table->primary('id_punto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PuntosEstrategicos');
    }
}
