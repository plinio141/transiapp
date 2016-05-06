<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contrataciones', function (Blueprint $table) {
            $table->date('fecha_contratacion');
            $table->integer('id_administrador'); 
            $table->foreign('id_administrador')->references('id')->on('administradores');
            $table->integer('id_empresa'); 
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Contratacion');
    }
}
