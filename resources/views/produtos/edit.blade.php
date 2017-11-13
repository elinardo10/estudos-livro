@extends('layouts.app')

@section ('titulo')
SysControll || Editar Produtos
@stop

@section('content')

	<h3>Editando o Produto {{ $p->nome }}</h3>
 <hr>
	@include('partials._messages')
	 <div class="row col-md-6">
    <form action="{{ route('produtos.update', $p->id) }}" method="post">

 <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group ">
    <label>Nome</label>
    <input class="form-control" name="nome" value="{{ $p->nome }}">
    </div>

    <div class="form-group">
    <label>Descrição</label>
    <input class="form-control" name="descricao" value="{{ $p->descricao }}">
    </div>

    <div class="form-group">
    <label>Valor</label>
    <input class="form-control" name="valor" value="{{ $p->valor }}">
    </div>

    <div class="form-group">
    <label>Quantidade</label>
    <input class="form-control" name="quantidade" value="{{ $p->quantidade }}">
    </div>     

<button type="submit" class="btn btn-success">Alterar Cadastro</button>



</div>
 
@stop