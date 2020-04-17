@extends('layouts.app')

@section('content')

<head>
<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<div class="jumbotron">
<nav class="navbar navbar-inverse">

<span><i class="fa fa-home list-group-item active hover"></i></span> <a href="#">Inicio</a>
<form id="form_novo" method="post">
<span><i class="fa fa-plus listgroup-item active hover"></i></span> <a href="novo" aria-hidden="truw">Novo Produto</a>
<span><i class="fa fa-list-alt listgroup-item active hover"></i></span> <a href="lista" aria-hidden="true">Mais Vendidos</a>
</nav>

</div>
<br/>
<hr/>
<div class="container" style="margin-left:1px; margin-right:1px; width:100%; height:100%;">
    <div class="row">
                    <div class="container">   
                    <div class="panel panel-primary text-center">
                    <div class="panel panel-header lista-group-item active"><h4 class="title">Lista de Produtos</h4></div>
                    <div class="panel-body">
                    <form method="post" action= "/home/remover/{id}">
                    <table class=" table table-bordered table-stripped table-hover" style="font-size:14px;">
                        <thead>
                                <th class="text-center"> Nome</th>
                                <th class="text-center">Descricao</th>
                                <th class="text-center">Preco</th>
                                <th class="text-center">Quantidade</th>
                                <th class="text-center">Ações</th>
                        </thead>
                        @if(!empty($mensagem))
                        <div class="alert alert-sucess" role="alert">
                            {{ $mensagem }}
                        </div>
                        @endif
                        <tbody>
                                <?php 
                                foreach($dados as $dado): ?>
                                <tr>
                                    <td> <?= $dado->nome ?> </td>
                                    <td> <?= $dado->descricao ?> </td>
                                    <td> <?= $dado->preco ?> </td>
                                    <td> <?= $dado->quantidade ?> </td>
                                    <td><span><input type="button" class="btn btn-info sm" value="Editar" onclick="window.location.href = ('http://localhost:8000/novo');"/></span>
                                    <span> <input type="button" class="btn btn-danger sm" value="excluir" onclick="return prompt('Deseja excluir?');"/></span>
                                    <span> <input type="button" class="btn btn-primary sm" value="exibir"/></span>
                                </tr>
                               
                                

                        <?php endforeach; ?>
                              
                              
                        </tbody>
                            
                    </table>
                    </form>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
