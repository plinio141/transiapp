<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $table = 'rutas';

    protected $fillable = ['id_ruta','id_lugar','pos_id_lugar','nombre_ruta','hora_inicio','hora_final','tarifa','descripcion','activa'];
	
}
