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
  <li class="active">Cadastro de Fornecedor</li>
</ul>

<div class="col-lg-8 col-lg-offset-2 text-center">
    <h2 class="margin-top-0 wow fadeIn">CADASTRO DE FORNECEDOR</h2>
    <hr class="primary">
</div>

<div class="col-lg-10 col-lg-offset-1 text-center">
	<form action="/fornecedores/adiciona" method="post" class="contact-form row">

		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		
		<div class="col-md-4">
			<label></label>
			<input type="text" name="nome" class="form-control" placeholder="Nome">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="endereco" class="form-control" placeholder="Endereço">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="bairro" class="form-control" placeholder="Bairro">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text"name="cidade" class="form-control" placeholder="Cidade">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="uf" class="form-control" placeholder="UF">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="cep" class="form-control" placeholder="CEP">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="phone" name="telefone" class="form-control" placeholder="Telefone">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="rg" class="form-control" placeholder="RG">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="cpf" class="form-control" placeholder="CPF">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="email" name="email" class="form-control" placeholder="Email">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="date" name="datacadastro" class="form-control" placeholder="Data">
		</div>
		<div class="col-md-4">
			<label></label>
			<textarea type="text" name="observacao" class="form-control" rows="2" placeholder="Observação.."></textarea>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<label></label>
			<button type="submit" class="btn
			btn-primary btn-block">Adicionar<i class="ion-android-arrow-forward"></i></button>
		</div>
	</form>
</div>

@stop