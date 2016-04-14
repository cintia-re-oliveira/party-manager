<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    protected $table = 	'promocoes';
    public $timestamps = false;
    protected $fillable = array('nome','descricao', 'valor');
}
