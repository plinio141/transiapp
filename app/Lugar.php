<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = 'lugares';
    protected $fillable = ['nombre_lugar','id_lugar','pos_id_lugar','longitud','latitud'];
}
