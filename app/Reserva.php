<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 	'reservas';
    public $timestamps = false;
    protected $fillable = array('nome','categoriaevento', 'dataevento', 'horainicio', 'horatermino', 'comentario', 'valor', 'pagamentoconfirmado');
}
