<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facadas\DB;
use sistema\Foto;
use Request;

class FotoController extends Controller{

	public function lista()
	{		
		$fotos = Foto::all();

		return view('foto.listagem')->with('fotos', $fotos);
	}

	public function mostra($id)
	{
		$foto = Foto::find($id);

		if(empty($foto))
		{
			return "Essa foto não existe";
		}
		return view('foto.detalhes')->with('p', $foto);
	}

	public function novo()
	{
		return view('foto.formulario');
	}

	public function adiciona()
	{
		Foto::create(Request::all());

		return redirect()->action('FotoController@lista')->withInput(Request::only('nome'));
	}

	public function listaJson()
	{
		$fotos = Foto::all();
		return response()->json($fotos);
	}

	public function remove($id)
	{
		$foto = Foto::find($id);
		$foto->delete();

		return redirect()->action('FotoController@lista');
	}

}

