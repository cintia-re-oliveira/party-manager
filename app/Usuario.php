<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 	'usuarios';
    public $timestamps = false;
    protected $fillable = array('nome','email', 'senha', 'tipo');
}
