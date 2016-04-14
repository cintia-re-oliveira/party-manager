<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facadas\DB;
use sistema\login;
use Request;

class LoginController extends Controller{

	public function logar()
	{

		return view('login.formulario');
	}

	public function conectar()
	{
		//$usuario = Usuario::find($id);
		$usuario="SELECT `id`, `nome`, `senha` FROM `usuarios` WHERE `id` =".$ID."AND  `senha` =".$Ssenha."";

		if(empty($usuario))
		{
			return "Esse usuario não existe";
		}
		return view('site.admin');
	}
}

