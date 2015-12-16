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

Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
Route::resource ('favoritos', 'FavoritosController');
Route::resource ('bloqueados', 'BloqueadosController');
Route::resource ('tipousuario', 'TipoUsuarioController');
Route::resource ('fotos', 'FotosController');
Route::resource ('videos', 'VideosController');
Route::resource ('usuarios', 'UsuariosController');

Route::get('panel', 'PanelController@index');
Route::get('videos2', 'PanelController@videos');
Route::get('fotos2', 'PanelController@fotos');
Route::get('favoritos2', 'PanelController@favoritos');
Route::get('bloqueados2', 'PanelController@bloqueados');
Route::get('usuarios2', 'PanelController@usuario');



Route::get('/', 'WelcomeController@index');


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
