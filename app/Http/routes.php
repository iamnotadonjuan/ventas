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

//Route::get('/', function () {
//    return view('inicio');
//});

//route register, login & logout
Route::post('register', 'Auth\AuthController@postRegister');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//reoute update user
Route::resource('user', 'UsuarioController');
Route::get('/users', 'UsuarioController@listing');

Route::get('deseo/listar', 'DeseoController@index');
Route::post('deseo/store/{id}', 'DeseoController@store');
Route::get('deseo/destroy/{id}', 'DeseoController@destroy');
Route::get('deseo/listarofertas', 'DeseoController@listarOferta');

Route::get('/', 'InmuebleController@index');
Route::get('inmueble/create', 'InmuebleController@create');
Route::get('inmueble/destroy/{id}', 'InmuebleController@destroy');
Route::get('inmueble/edit/{id}', 'InmuebleController@edit');
Route::get('inmueble/administrarinmuebles', 'InmuebleController@administrarInmuebles');
Route::post('inmueble/cambiarestado', 'InmuebleController@cambiarEstado');
Route::post('inmueble/store', 'InmuebleController@store');
Route::post('inmueble/show/{id}', 'InmuebleController@show');
Route::post('inmueble/update/{id}', 'InmuebleController@update');
Route::post('inmueble/buscar', 'InmuebleController@buscar');

Route::post('inmueblefoto/store', 'InmuebleFotoController@store');
Route::post('inmueblefoto/destroy/{id}', 'InmuebleFotoController@destroy');
