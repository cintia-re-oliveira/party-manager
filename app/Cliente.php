<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;
    protected $fillable = array('nome', 'endereco', 'bairro', 'cidade', 'uf', 'cep', 'telefone', 'rg', 'cpf','email', 'datacadastro','observacao');
}
