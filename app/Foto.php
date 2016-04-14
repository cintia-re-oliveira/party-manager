<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'fotos';
    public $timestamps = false;
    protected $fillable = array('nome');
}
