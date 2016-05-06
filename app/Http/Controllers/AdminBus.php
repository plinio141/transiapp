<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddBusRequest;

use App\Http\Requests;

use App\Ruta;

use App\Bus;

use App\Rodamiento;

use Redirect;

use Carbon\Carbon;

class AdminBus extends Controller
{
   public function index()
	{
		# code...
	}
    public function store(AddBusRequest $request)
	{
		$placa=$request->input('placa');
		$capacidad=$request->input('capacidad');
		$ruta=$request->input('ruta');
		$id_gps=$request->input('id_gps');
		$ruta=Ruta::where('nombre_ruta',$ruta)->first()->id_ruta;
		$fecha=Carbon::now();

		Bus::insert(['id_posicion'=>1,'placa' => $placa, 'capacidad'=> $capacidad, 'id_gps'=> $id_gps, 'estado'=>'BUENO']);
		Rodamiento::insert(['id_ruta'=> $ruta, 'placa'=>$placa, 'fecha_salida'=>$fecha ]);
		return Redirect::to('addBus')->with('message','store');
	}
}
