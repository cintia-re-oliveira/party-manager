<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Salao extends Model
{
    protected $table = 'salaos';
    public $timestamps = false;
    protected $fillable = array('nome', 'endereco', 'bairro', 'cidade', 'uf', 'cep', 'cnpj', 'inscricaoestadual', 'telefone','email', 'facebook');
}
