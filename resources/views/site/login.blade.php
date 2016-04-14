@extends('template.principal')

@section('menu')
<li><a href="/inicial">INICIAL</a></li>
<li><a href="/galeria">GALERIA DE FOTOS</a></li>
<li><a href="/promocoes_cli">PROMOÇÕES</a></li>
<li><a href="/orcamentos_cli">ORÇAMENTO</a></li>
<li class="active"><a href="/login">LOGIN</a></li>
<li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
@stop

@section('conteudo')
<br>
<ul class="breadcrumb">
  <li><a href="/inicial">Inicial</a></li>
  <li class="active">Login</li>
</ul>

<div class="col-lg-8 col-lg-offset-2 text-center">
    <h2 class="margin-top-0 wow fadeIn"> LOGIN </h2>
    <hr class="primary">
</div>

<!--<form action="/login/conectar" method="post">-->
<div class="col-lg-10 col-lg-offset-1 text-center">
    <form action="/orcamentos/adiciona" method="post" class="contact-form row">

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        
        <div class="col-md-12">
            <label></label>
            <input type="text" name="nome" class="form-control" placeholder="Usuário">
        </div>
        <div class="col-md-12">
            <label></label>
            <input type="password" name="senha" class="form-control" placeholder="Senha">
        </div>
        <div class="col-md-8 col-md-offset-2">
            <label></label>
            
            <span class="group-btn">     
                <a href="/inicial/admin" class="btn
            btn-primary btn-block">Conectar <i class="fa fa-sign-in"></i></a>
            </span>
        </div>
    </form>
</div>
<!--</form>-->
@stop