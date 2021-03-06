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
  <li><a href="/orcamentos">Lista de Orçamentos</a></li>
  <li class="active">Detalhes de Orçamento</li>
</ul>

<div class="col-lg-8 col-lg-offset-2 text-center">
    <h2 class="margin-top-0 wow fadeIn">{{ $p->nome }}</h2>
    <hr class="primary">
</div>
  

<div class="list-group">
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">

    <table align="center">
      <tr>
        <td> <b>E-mail:</b> </td>
        <td> {{ $p->email }} </td>
      </tr>
      <tr>
        <td> <b>Telefone:</b> </td>
        <td> {{ $p->telefone }} </td>
      </tr>
      <tr>
        <td> <b>Data do Evento:</b> </td>
        <td> {{ $p->dataevento }} </td>
      </tr>
      <tr>
        <td> <b>Quantidade de Pessoas:</b> </td>
        <td> {{ $p->quantidadepessoas }} </td>
      </tr>
      <tr>
        <td> <b>Categoria do evento:</b> </td>
        <td> {{ $p->categoriaevento }} </td>
      </tr>
      <tr>
        <td> <b>Por onde conheceu o salão de festas:</b> </td>
        <td> {{ $p->pesquisa }} </td>
      </tr>
      <tr>
        <td> <b>Comentários:</b> </td>
        <td> {{ $p->comentarios }} </td>
      </tr>
    </table>  
  </h4>  
  </a>
</div>

@stop