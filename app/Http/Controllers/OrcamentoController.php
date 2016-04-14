<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facadas\DB;
use sistema\Orcamento;
use Request;

class OrcamentoController extends Controller{

	public function lista()
	{		
		$orcamentos = Orcamento::all();

		return view('orcamento.listagem')->with('orcamentos', $orcamentos);
	}

	public function mostra($id)
	{
		$orcamento = Orcamento::find($id);

		if(empty($orcamento))
		{
			return "Esse orçamento não existe";
		}
		return view('orcamento.detalhes')->with('p', $orcamento);
	}

	public function novo()
	{
		return view('orcamento.formulario');
	}

	public function adiciona()
	{
		Orcamento::create(Request::all());

		return redirect()->action('OrcamentoController@lista')->withInput(Request::only('nome'));
	}

	public function listaJson()
	{
		$orcamentos = Orcamento::all();
		return response()->json($orcamentos);
	}

	public function remove($id)
	{
		$orcamento = Orcamento::find($id);
		$orcamento->delete();

		return redirect()->action('OrcamentoController@lista');
	}

}

