<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ruta;

use App\Bus;

use App\Lugar;

use App\Empresa;

use App\Administrador;

use App\Contratacion;

use DB;

class Vistas extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function addRuta()
	{
		$data = array(
		"lugares"=> Lugar::all(),
		"buses" => Bus::all(),
		"title" => "Añadir Ruta"
		);
		return view('addRuta',$data);
	}

	public function editRuta()
	{	
		$data = array(
		    "buses" => Ruta::all(),
		    "title" => "Editar Ruta"
		);
		return view('editRuta',$data);
	}

	public function showRuta()
	{	
		$data = array(
			"rutas" => Ruta::all(),
		    "title" => "Ver rutas"
		);
		return view('showRutas',$data);
	}

	 public function addBus()
	{
		$data = array(
			"rutas" => Ruta::all(),
		    "title" => "Añadir Bus"
		);
		return view('addBus',$data);
	}

	public function editBus()
	{	
		$data = array(
			"rutas" => Ruta::all(),
		    "title" => "Editar Bus"
		);
		return view('editBus',$data);
	}

	public function showBus()
	{	
		$data = array(
			"buses" => Bus::all(),
		    "title" => "Mostrar buses"
		);
		return view('showBus',$data);
	}

	public function addAdministrador()
	{	
		$data = array(
			"empresas" => DB::select('SELECT NOMBRE_EMPRESA FROM empresas e left join contrataciones c on e.ID_EMPRESA != c.ID_EMPRESA '),
		    "title" => "Agregar Administrador"
		);
		return view('addAdministrador',$data);
	}
	public function addEmpresa()
	{
		$data = array(
			"administradores" => DB::select('SELECT NAME FROM contrataciones, administradores WHERE ID != ID_ADMINISTRADOR and ID != 1'),
		    "title" => "Agregar Empresa",
		);
		return view('addEmpresa',$data);
	}
	public function addLugar()
	{
		$data = array(
		    "title" => "Agregar Lugar",
		);
		return view('addLugar',$data);
	}
	public function addSitioEstrategico()
	{
		$data = array(
		    "title" => "Agregar Sitio Estrategico",
		    "rutas" => Ruta::all(),
		);
		return view('addSitioEstrategico',$data);
	}
}
