<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Posiciones', function (Blueprint $table) {
            $table->integer('id_posicion');
            $table->string('nombre_posicion')->unique();
            $table->string('latitud');
            $table->string('longitud');
            
            $table->primary('id_posicion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Posiciones');
    }
}
