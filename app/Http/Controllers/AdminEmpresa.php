<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddEmpresaRequest;

use App\Administrador;

use App\Empresa;

use Redirect;

class AdminEmpresa extends Controller
{

	public function index()
	{
		# code...
	}
    public function store(AddEmpresaRequest $request)
	{
		$id=$request->input('id_empresa');
		$nombre=$request->input('nombre_empresa');
		Empresa::insert(['id_empresa' => $id, 'nombre_empresa'=> $nombre]);
		return Redirect::to('addEmpresa')->with('message','store');
	}
}
