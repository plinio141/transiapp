<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\AddAministradorRequest;

use App\Administrador;

use App\Empresa;

use Redirect;

use Carbon\Carbon;

use App\Contratacion;

class AdminAdministrador extends Controller
{
    public function index()
	{
		
	}
    public function store(AddAministradorRequest $request)
	{
		$id=$request->input('id');
		$nombre=$request->input('name');
		$nombre_administrador=$request->input('nombre_administrador');
		$apellido_administrador=$request->input('apellido_administrador');
		$password=bcrypt($request->input('password'));

		Administrador::insert(['id' => $id, 'name'=> $nombre, 'password'=> $password, 'nombre_administrador'=> $nombre_administrador,'apellido_administrador'=> $apellido_administrador]);
		$fecha=Carbon::now();
		$empresa=$request->input('empresa');
		$id_empresa=Empresa::where('nombre_empresa',$empresa)->first()->id_empresa;
		Contratacion::insert(['id_administrador' => $id, 'id_empresa'=> $id_empresa, 'fecha_contratacion'=> $fecha]);

		return Redirect::to('addAdministrador')->with('message','store');

	}
}
