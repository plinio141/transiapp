<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\AddRutaRequest;

use App\Ruta;

use App\Bus;

use App\Lugar;

use Redirect;

use App\Gestion;

use DB;

use Carbon\Carbon;

use Auth;

class AdminRuta extends Controller
{
   public function index()
	{
		# code...
	}
    public function store(AddRutaRequest $request)
	{
		$id_ruta=$request->input('id_ruta');
		$lugar_salida=$request->input('lugar_salida');
		$lugar_destino=$request->input('lugar_destino');
		$nombre_ruta=$lugar_salida."-".$lugar_destino;
		$hora_inicio=$request->input('hora_inicio');
		$hora_final=$request->input('hora_final');
		$tarifa=$request->input('tarifa');
		$activa=$request->input('activa');
		$obervaciones=$request->input('obervaciones');

		$lugar_destino=Lugar::where('nombre_lugar',$lugar_destino)->first()->id_lugar;
		$lugar_salida=Lugar::where('nombre_lugar',$lugar_salida)->first()->id_lugar;
		

		$ruta=Ruta::where('nombre_ruta',$nombre_ruta)->first();

		if (count($ruta)>0) {
			return Redirect::to('addRuta')->with('message','nameRuta');
		}
		else{
			if (is_null($obervaciones)) {
			Ruta::insert(['id_ruta' => $id_ruta, 'nombre_ruta'=> $nombre_ruta,'id_lugar' => $lugar_salida, 'pos_id_lugar'=> $lugar_destino,'hora_inicio' => $hora_inicio, 'hora_final'=> $hora_final,'tarifa' => $tarifa, 'activa'=> 'true']);
			$id_administrador=Auth::user()->id;
			$fecha=Carbon::now();

			Gestion::insert(['id_ruta'=>$id_ruta, 'id_administrador'=>$id_administrador, 'fecha_gestion'=>$fecha ]);

			return Redirect::to('addRuta')->with('message','store');
			}
			Ruta::insert(['id_ruta' => $id_ruta, 'nombre_ruta'=> $nombre_ruta,'lugar_salida' => $lugar_salida, 'lugar_destino'=> $lugar_destino,'hora_inicio' => $hora_inicio, 'hora_final'=> $hora_final,'tarifa' => $tarifa, 'activa'=> 'true', 'obervaciones'=>$obervaciones]);
			
			return Redirect::to('addRuta')->with('message','store');
		}
		
	}
}
