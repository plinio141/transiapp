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
        Schema::create('Lugares', function (Blueprint $table) {
            $table->integer('id_lugar');
            $table->string('nombre_lugar')->unique();
            $table->string('latitud');
            $table->string('longitud');
            
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
