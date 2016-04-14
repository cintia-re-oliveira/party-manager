<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facades\DB;
use sistema\Usuario;
use Request;

class UsuarioController extends Controller{
	public function lista(){

		
		$usuarios = Usuario::all();;

		return view('usuario.listagem')->with('usuarios', $usuarios);

	}

	public function mostra($id)
	{		
		$usuario =	Usuario::find($id); 

		if(empty($usuario))
		{
			return "Esse usuario não existe";
		}
		return view('usuario.detalhes')->with('p', $usuario);
	}

	public function novo()
	{
		return view('usuario.formulario');
	}

	public function adiciona()
	{
		usuario::create(Request::all());

		return redirect()->action('UsuarioController@lista')->withInput(Request::only('nome'));
	}

	public function listaJson()
	{
		$usuarios = Usuario::all();
		return response()->json($usuarios);
	}

	public function remove($id)
	{
		$usuario = usuario::find($id);
		$usuario->delete();

		return redirect()->action('UsuarioController@lista');
	}
}