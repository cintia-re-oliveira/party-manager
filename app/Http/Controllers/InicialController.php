<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facadas\DB;
use sistema\Promocao;
use Request;

class InicialController extends Controller{

	
	public function inicio()
	{
		return view('site.inicio');
	}

	public function galeria()
	{
		return view('site.galeria');
	}

	public function promocoes_cli()
	{
		$promocoes = Promocao::all();;

		return view('site.promocoes_cli')->with('promocoes', $promocoes);
	}

	public function orcamentos_cli()
	{
		return view('site.orcamentos_cli');
	}

	public function logar()
	{

		return view('site.login');
	}

	public function conectar()
	{
		//$usuario = Usuario::find($id);
		$usuario="SELECT `id`, `nome`, `senha` FROM `usuarios` WHERE `id` =".$ID."AND  `senha` =".$Ssenha."";

		if(empty($usuario))
		{
			return "Esse usuario não existe";
		}
		return view('gerencia.admin');
	}


	public function novo()
	{
		return view('gerencia.admin');

	}
}

