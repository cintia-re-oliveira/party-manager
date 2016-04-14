@extends('template.principal2')

@section('menu')

<li><a href="/inicial/admin">INICIAL</a></li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CADASTRO <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="/clientes/novo">CLIENTE</a></li>
    <li><a href="/fornecedores/novo">FORNECEDOR</a></li>
    <li><a href="/produtos/novo">PRODUTO</a></li>        
    <li class="divider"></li>
    <li><a href="/orcamentos/novo">ORÇAMENTO</a></li>
    <li><a href="/reservas/novo">RESERVA</a></li>
  </ul>
</li>

<li class="active" class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CONSULTA <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="/clientes">CLIENTES</a></li>
    <li><a href="/fornecedores">FORNECEDORES</a></li>
    <li><a href="/produtos">PRODUTOS</a></li>   
    <li><a href="/promocoes">PROMOÇÕES</a></li> 
    <li><a href="/orcamentos">ORÇAMENTOS</a></li> 
    <li><a href="/reservas">RESERVAS</a></li>   
    <li class="divider"></li>         
    <li><a href="/salao">SALÃO</a></li>
    <li><a href="/usuarios">USUÁRIOS</a></li> 
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">RELATÓRIO <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="/clientes">CLIENTES</a></li>
    <li><a href="/fornecedores">FORNECEDORES</a></li>
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CONFIGURAÇÃO <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="/salao/novo">SALÃO</a></li>
    <li><a href="/usuarios/novo">USUÁRIO</a></li>
    <li><a href="/promocoes/novo">PROMOÇÃO</a></li>
    <li><a href="/fotos/novo">FOTO</a></li>
  </ul>
</li>           
		

@stop

@section('conteudo')
<br>
<ul class="breadcrumb">
  <li><a href="/inicial/admin">Inicial</a></li>
  <li><a href="/consultas">Consultas</a></li>
  <li class="active">Lista de Clientes</li>
</ul>

@if(empty($clientes))
	<div class="alert alert-danger">
		Você não tem nenhum cliente cadastrado.
	</div>
@else
<div class="col-lg-8 col-lg-offset-2 text-center">
    <h2 class="margin-top-0 wow fadeIn">LISTA DE CLIENTES</h2>
    <hr class="primary">
</div>


	<table class="table table-hover">
  <thead>
    <tr class="success" >
      <th> Nome </th>
      <th> Telefone </th>
      <th> Observação </th>
      <th> Data de Cadastro </th>
      <th> Detalhes </th>
      <th> Remover </th>
    </tr>
    </thead>
		@foreach ($clientes as $p)
			<tr class="success">
				<td>{{ $p->nome }} </td>
				<td>{{ $p->telefone }} </td>
				<td>{{ $p->observacao }} </td>
				<td>{{ $p->datacadastro }} </td>
				<td align=center><a href="/clientes/mostra/{{ $p->id }}"><i class="glyphicon glyphicon-list-alt"></i></a></td>
				<td align=center>
					<a href="{{action('ClienteController@remove', $p->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
		@endforeach
	</table>
@endif

@stop