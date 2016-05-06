<?php

namespace App\Http\Controllers;

use App\Administrador;

use Auth;

use Session;

use Redirect;

use App\Http\Requests\LoginRequest;



class IniciarSesion extends Controller
{
    public function index()
	{
		return view('inicioSesion');
	}

	public function store(LoginRequest $request)
	{

		$nombre = $request->input('usuario');
		$password = $request->input('password');
		if (Auth::attempt(['name' => $nombre, 'password' => $password])) {
			if (Auth::user()->id==1) {
				return Redirect::to('addEmpresa');
			}
            else{
            	return Redirect::to('addRuta');
            }
        }else{
        	Session::flash('message-login', 'Datos incorrectos');
        	return Redirect::to('/');

        }
	}
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
 
}
