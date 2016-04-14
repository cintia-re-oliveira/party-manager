@extends('template.principal')

@section('menu')
<li><a href="/inicial">INICIAL</a></li>
<li class="active"><a href="/galeria">GALERIA DE FOTOS</a></li>
<li><a href="/promocoes_cli">PROMOÇÕES</a></li>
<li><a href="/orcamentos_cli">ORÇAMENTO</a></li>
<li><a href="/login">LOGIN</a></li>
<li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
@stop

@section('conteudo')

<br>
<ul class="breadcrumb">
  <li><a href="/inicial">Inicial</a></li>
  <li class="active">Galeria de Fotos</li>
</ul>

<div class="col-lg-8 col-lg-offset-2 text-center">
    <h2 class="margin-top-0 wow fadeIn"> GALERIA DE FOTOS </h2>
    <hr class="primary">
</div>

@stop