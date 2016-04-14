<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facadas\DB;
use sistema\Cliente;
use Request;

class ClienteController extends Controller{

	public function lista()
	{		
		$clientes = Cliente::all();

		return view('cliente.listagem')->with('clientes', $clientes);
	}

	public function mostra($id)
	{
		$cliente = Cliente::find($id);

		if(empty($cliente))
		{
			return "Esse cliente não existe";
		}
		return view('cliente.detalhes')->with('p', $cliente);
	}

	public function novo()
	{
		return view('cliente.formulario');
	}

	public function adiciona()
	{
		Cliente::create(Request::all());

		return redirect()->action('ClienteController@lista')->withInput(Request::only('nome'));
	}

	public function listaJson()
	{
		$clientes = Cliente::all();
		return response()->json($clientes);
	}

	public function remove($id)
	{
		$cliente = Cliente::find($id);
		$cliente->delete();

		return redirect()->action('ClienteController@lista');
	}

}

