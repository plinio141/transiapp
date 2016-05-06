<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gestiones', function (Blueprint $table) {
            $table->integer('id_ruta');
            $table->foreign('id_ruta')->references('id_ruta')->on('rutas');
            $table->integer('id_administrador');
            $table->foreign('id_administrador')->references('id')->on('administradores');
            $table->date('fecha_gestion'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Gestiones');
    }
}
