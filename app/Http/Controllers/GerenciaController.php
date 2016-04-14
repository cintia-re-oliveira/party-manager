<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facadas\DB;
use Request;

class GerenciaController extends Controller{

	public function cadastros()
	{
		return view('gerencia.cadastros');
	}

	public function consultas()
	{
		return view('gerencia.consultas');
	}

	public function relatorios()
	{
		return view('gerencia.relatorios');
	}

	public function configuracoes()
	{
		return view('gerencia.configuracoes');
	}
	

}
