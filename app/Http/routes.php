<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('/', function () {
    return view('inicioSesion');
});
Route::get('addRuta','Vistas@addRuta');
Route::get('editRuta','Vistas@editRuta');
Route::get('showRuta','Vistas@showRuta');
Route::get('addBus','Vistas@addBus');
Route::get('editBus','Vistas@editBus');
Route::get('showBus','Vistas@showBus');
Route::get('addAdministrador','Vistas@addAdministrador');
Route::get('addEmpresa','Vistas@addEmpresa');

Route::resource('iniciarSesion','IniciarSesion');
Route::get('logout','IniciarSesion@logout');
Route::resource('ruta','AdminRuta');
Route::resource('lugar','Lugares');
Route::resource('rutalugar','rutalugar');
Route::resource('empresa','AdminEmpresa');
Route::resource('administrador','AdminAdministrador');
Route::resource('bus','AdminBus');



