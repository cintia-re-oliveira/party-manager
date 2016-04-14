<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facadas\DB;
use sistema\Salao;
use Request;
 
class SalaoController extends Controller{

	public function lista()
	{		
		$salaos = Salao::all();

		return view('salao.listagem')->with('salaos', $salaos);
	}

	public function mostra($id)
	{
		$salao = Salao::find($id);

		if(empty($salao))
		{
			return "Esse salão não existe";
		}
		return view('salao.detalhes')->with('p', $salao);
	}

	public function novo()
	{
		return view('salao.formulario');
	}

	public function adiciona()
	{
		Salao::create(Request::all());

		return redirect()->action('SalaoController@lista')->withInput(Request::only('nome'));
	}

	public function listaJson()
	{
		$salaos = Salao::all();
		return response()->json($salaos);
	}

	public function remove($id)
	{
		$salao = Salao::find($id);
		$salao->delete();

		return redirect()->action('SalaoController@lista');
	}

}

