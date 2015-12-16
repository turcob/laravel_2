<?php namespace Login\Http\Controllers;

use Login\Http\Requests;
use Login\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PanelController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}


	public function videos()
	{
		return 'hola';
	}

	public function fotos()
	{
		return view('fotos');
	}

	public function favoritos()
	{
		return view('favoritos');
	}

	public function bloqueados()
	{
		return view('bloqueados');
	}

	public function usuario()
	{
		return view('usuario');
	}

	

}
