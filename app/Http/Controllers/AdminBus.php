<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddBusRequest;

use App\Http\Requests\EditBusRequest;

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
		$id_bus=$request->input('id_bus');
		$placa=$request->input('placa');
		$capacidad=$request->input('capacidad');
		$ruta=$request->input('ruta');
		$id_gps=$request->input('id_gps');
		$ruta=Ruta::where('nombre_ruta',$ruta)->first()->id_ruta;
		$fecha=Carbon::now();

	 	Bus::insert(['id_bus'=>$id_bus,'placa' => $placa, 'capacidad'=> $capacidad, 'id_gps'=> $id_gps, 'estado'=>'OPERACIÓN','latitud'=>0, 'longitud'=>0]);
		Rodamiento::insert(['id_ruta'=> $ruta, 'id_bus'=>$id_bus, 'fecha_salida'=>$fecha ]);
		return Redirect::to('addBus')->with('message','store');
	}
	public function show($id){
		$data = array(
		"bus" => Bus::where('id_bus',$id)->first(),
		"estados" => array('OPERACIÓN','REPARACIÓN'),
		"rutas" => Ruta::all(),
		"rodamiento"=> Rodamiento::where('id_bus',$id)->orderBy('fecha_salida', 'desc')->first()->id_ruta,
		"title" => "Editar Bus"
		);
		return view('editBus',$data);
	}
	public function update($id, EditBusRequest $request){
		$placa=$request->input('placa');
		$capacidad=$request->input('capacidad');
		$ruta=$request->input('ruta');
		$id_gps=$request->input('id_gps');
		$estado=$request->input('estado');
		$ruta=Ruta::where('nombre_ruta',$ruta)->first()->id_ruta;
		$fecha=Carbon::now();

	 	Bus::where('id_bus', $id)->update(['placa' => $placa, 'capacidad'=> $capacidad, 'id_gps'=> $id_gps, 'estado'=>$estado,'latitud'=>0, 'longitud'=>0]);
		Rodamiento::insert(['id_ruta'=> $ruta, 'id_bus'=>$id, 'fecha_salida'=>$fecha ]);
		return Redirect::to('addBus')->with('message','store');
	}
}
