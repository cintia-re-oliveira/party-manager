@extends('template.principal')

@section('menu')
<li><a href="/inicial">INICIAL</a></li>
<li><a href="/galeria">GALERIA DE FOTOS</a></li>
<li><a href="/promocoes_cli">PROMOÇÕES</a></li>
<li class="active"><a href="/orcamentos_cli">ORÇAMENTO</a></li>
<li><a href="/login">LOGIN</a></li>
<li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
@stop

@section('conteudo')
<br>
<ul class="breadcrumb">
  <li><a href="/inicial">Inicial</a></li>
  <li class="active">Orçamento</li>
</ul>

<div class="col-lg-8 col-lg-offset-2 text-center">
    <h2 class="margin-top-0 wow fadeIn">FAÇA SEU ORÇAMENTO</h2>
    <hr class="primary">
</div>

<div class="col-lg-10 col-lg-offset-1 text-center">
	<form action="/orcamentos/adiciona" method="post" class="contact-form row">

		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		
		<div class="col-md-12">
			<label></label>
			<input type="text" name="nome" class="form-control" placeholder="Nome">
		</div>
		<div class="col-md-8">
			<label></label>
			<input type="email" name="email" class="form-control" placeholder="Email">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="phone" name="telefone" class="form-control" placeholder="Telefone">
		</div>
		<div class="col-md-4">
			<label></label>
			<select name="categoriaevento" class="form-control" placeholder="Categoria do Evento">
			  <option>Categoria do Evento</option>
			  <option>Aniversário</option>
			  <option>Casamento</option>
			  <option>Confraternização</option>
			  <option>Formatura</option>			  
			  <option>15 anos</option>
			  <option>Outros</option>
			</select>
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="text" name="quantidadepessoas" class="form-control" placeholder="Quantidade de Pessoas">
		</div>
		<div class="col-md-4">
			<label></label>
			<input type="date" name="dataevento" class="form-control" placeholder="Data do Evento">
		</div>	
		<div class="col-md-12">
			<label></label>
			<input type="text" name="pesquisa" class="form-control" placeholder="Como conheceu a empresa">
		</div>
		
		<div class="col-md-12">
			<label></label>
			<textarea type="text" name="observacao" class="form-control" rows="3" placeholder="Observação.."></textarea>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<label></label>
			<button type="submit" class="btn
			btn-primary btn-block">Adicionar<i class="ion-android-arrow-forward"></i></button>
		</div>
	</form>
</div>


@stop