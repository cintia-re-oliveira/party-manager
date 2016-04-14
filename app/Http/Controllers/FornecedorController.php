<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facadas\DB;
use sistema\Fornecedor;
use Request;

class FornecedorController extends Controller{

	public function lista()
	{		
		$fornecedores = Fornecedor::all();

		return view('fornecedor.listagem')->with('fornecedores', $fornecedores);
	}

	public function mostra($id)
	{
		$fornecedores = Fornecedor::find($id);

		if(empty($fornecedores))
		{
			return "Esse fornecedor não existe";
		}
		return view('fornecedor.detalhes')->with('p', $fornecedores);
	}

	public function novo()
	{
		return view('fornecedor.formulario');
	}

	public function adiciona()
	{
		Fornecedor::create(Request::all());

		return redirect()->action('FornecedorController@lista')->withInput(Request::only('nome'));
	}

	public function listaJson()
	{
		$clientes = Fornecedor::all();
		return response()->json($fornecedores);
	}

	public function remove($id)
	{
		$fornecedores = Fornecedor::find($id);
		$fornecedores->delete();

		return redirect()->action('FornecedorController@lista');
	}

}

