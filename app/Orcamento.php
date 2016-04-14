<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $table = 'orcamentos';
    public $timestamps = false;
    protected $fillable = array('nome', 'email', 'telefone', 'dataevento', 'quantidadepessoas', 'categoriaevento', 'pesquisa', 'comentarios');
}
