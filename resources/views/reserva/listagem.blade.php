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
  <li class="active">Lista de Reservas</li>
</ul>

@if(empty($reservas))
	<div class="alert alert-danger">
		Você não tem nenhuma reserva cadastrada.
	</div>
@else

<div class="col-lg-8 col-lg-offset-2 text-center">
    <h2 class="margin-top-0 wow fadeIn">LISTA DE RESERVAS</h2>
    <hr class="primary">
</div>

	<table class="table table-striped table-bordered table-hover">
      <tr>
      <td> Nome </td>
      <td> Telefone </td>
      <td> Data do Evento </td>
      <td> Categoria do Evento </td>
      <td> Detalhes </td>
      <td> Remover </td>
    </tr>
		@foreach ($reservas as $p)
			<tr>
				<td>{{ $p->nome }} </td>
				<td>{{ $p->telefone }} </td>
				<td>{{ $p->dataevento }} </td>
				<td>{{ $p->categoriaevento }} </td>
				<td align=center><a href="/reservas/mostra/{{ $p->id }}"><i class="glyphicon glyphicon-list-alt"></i></a></td>
				<td align=center>
					<a href="{{action('ReservaController@remove', $p->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
		@endforeach
	</table>
@endif

@stop