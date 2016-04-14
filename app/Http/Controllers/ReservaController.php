<?php namespace sistema\Http\Controllers;

use Illuminate\Support\Facadas\DB;
use sistema\Reserva;
use Request;

class ReservaController extends Controller{

	public function lista()
	{		
		$reservas = Reserva::all();

		return view('reserva.listagem')->with('reservas', $reservas);
	}

	public function mostra($id)
	{
		$reserva = Reserva::find($id);

		if(empty($reserva))
		{
			return "Essa reserva não existe";
		}
		return view('reserva.detalhes')->with('p', $reserva);
	}

	public function novo()
	{
		return view('reserva.formulario');
	}

	public function adiciona()
	{
		
		Reserva::create(Request::all());

		return redirect()->action('ReservaController@lista')->withInput(Request::only('nome'));
	}

	public function listaJson()
	{
		$reservas = Reserva::all();
		return response()->json($reservas);
	}

	public function remove($id)
	{
		$reserva = Reserva::find($id);
		$reserva->delete();

		return redirect()->action('ReservaController@lista');
	}

}

