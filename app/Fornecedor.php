<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
  	protected $table = 'fornecedores';
    public $timestamps = false;
    protected $fillable = array('nome', 'endereco', 'bairro', 'cidade', 'uf', 'cep', 'telefone', 'rg', 'cpf','email', 'datacadastro','observacao');
}
