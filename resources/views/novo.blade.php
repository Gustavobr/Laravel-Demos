@extends('layouts.app')

@section('content')

<head>
<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<div class="jumbotron">
<nav class="navbar navbar-inverse">
<form action="post" class="form-group">
<?php
@csrf
?>
<span><i class="fa fa-home list-group-item active hover"></i></span> <a href="/home">Inicio</a>
<span><i class="fa fa-plus listgroup-item active hover"></i></span> <a href="#" aria-hidden="false">Novo Produto</a>
</form>
</nav>

<br/>

    
    <h3 class="display-1 text-center text-capitalize">Novo Produto</h3>
</div>
    <div id="form-novo" class="text-center" style="align:center; margin-left:15px; margin-right:15px; padding:20px;">
    <form id="form" method="post"  action="{{ action('ProdutoController@store') }}">
        <?php @csrf  ?>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <label class="control-label">Nome:<input type="text" class="form form-group" required name="nome" placeholder="Nome do Produto"/>
            <br/>
        <label class="control-label">Descricao:<input type="text" class="form form-group" required name="descricao" placeholder="Descricao do Produto"/>
            <br/>
        <label class="control-label">Preco:<input type="text" step="any" class="form form-group" required name="preco" placeholder="Preço do Produto"/>
            <br/>
        <label class="control-label">Quantidade:<input type="text" step="any" class="form form-group" required name="quantidade" placeholder="Quantidade do Produto"/>
        <br/>
        <br/>
        <div id="botoes" class="inline">
       <span><input type="submit" value="Gravar" class="btn btn-success sm" onclick="return alert('Produto cadastrado com sucesso!');"/>
        </span>
        <br/>
        <br/>
            <span><a href="/home" class="list list-group-item active sm">Voltar</a></span>

        </div>


    </form>
    </div>
    
   







@endsection