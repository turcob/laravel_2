<?php namespace Login\Http\Controllers;

class EjemploController extends Controller {

	

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	return "hola desde controller";
	}


	public function nombre($nombre)
	{
	return "hola mi nombre es:".$nombre;
	}


}