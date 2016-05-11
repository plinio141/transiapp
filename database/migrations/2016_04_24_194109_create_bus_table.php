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
            $table->integer('id_bus');
            $table->string('placa');
            $table->integer('capacidad');
            $table->integer('id_gps');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('estado');
            $table->date('updated_at');
            
            $table->primary('id_bus');
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
