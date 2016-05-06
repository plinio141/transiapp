<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Lugar;

use App\Ruta;

class RutaLugar extends Controller
{
    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($nombreLugar)
	{	
		$lugar=Lugar::where('NOMBRE_LUGAR', $nombreLugar)->first()->ID_LUGAR;
		return response()->json(Ruta::where('POS_ID_LUGAR', $lugar)->where('ACTIVA', true)->get());
	}
 
}
