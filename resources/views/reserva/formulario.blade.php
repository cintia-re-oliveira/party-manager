@extends('template.principal2')

@section('menu')

<li><a href="/inicial/admin">INICIAL</a></li>

<li class="active" class="dropdown">
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

<li class="dropdown">
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
  <li><a href="/cadastros">Cadastros</a></li>
  <li class="active">Cadastro de Reserva</li>
</ul>


<div class="col-lg-8 col-lg-offset-2 text-center">
    <h2 class="margin-top-0 wow fadeIn">CADASTRO DE RESERVA</h2>
    <hr class="primary">
</div>

<div class="col-lg-10 col-lg-offset-1 text-center">
	<form action="/reservas/adiciona" method="post" class="contact-form row">

		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		
		<div class="col-md-4">
			<label></label>
			<input type="text" name="nome" class="form-control" placeholder="Nome">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="categoriaevento" class="form-control" placeholder="Categoria do Evento">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="date" name="dataevento" class="form-control" placeholder="Data do Evento">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="horarioinicio" class="form-control" placeholder="Horário de Início">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="horariotermino" class="form-control" placeholder="Horário de Término">
		</div>

		<div class="col-md-4">
			<label></label>
			<input type="decimal" name="valor" class="form-control" placeholder="Valor">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="comentario" class="form-control" placeholder="Comentário">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="pagamentoconfirmado" class="form-control" placeholder="Pagamento Confirmado">
		</div>
		<div class="col-md-8 col-md-offset-2">
			<label></label>
			<button type="submit" class="btn
			btn-primary btn-block">Adicionar<i class="ion-android-arrow-forward"></i></button>
		</div>
	</form>
</div>

@stop