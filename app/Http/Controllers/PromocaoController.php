<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facades\DB;
use sistema\Promocao;
use Request;


class PromocaoController extends Controller{
	public function lista(){

		
		$promocoes = Promocao::all();;

		return view('promocao.listagem')->with('promocoes', $promocoes);

	}

	public function mostra($id)
	{		
		$promocao =	Promocao::find($id); 

		if(empty($promocao))
		{
			return "Essa promoção não existe";
		}
		return view('promocao.detalhes')->with('p', $promocao);
	}

	public function novo()
	{
		return view('promocao.formulario');
	}

	public function adiciona()
	{
		Promocao::create(Request::all());

		return redirect()->action('PromocaoController@lista')->withInput(Request::only('nome'));
	}

	public function listaJson()
	{
		$promocoes = Promocao::all();
		return response()->json($promocoes);
	}

	public function remove($id)
	{
		$promocao = Promocao::find($id);
		$promocao->delete();

		return redirect()->action('PrmocaoController@lista');
	}
}