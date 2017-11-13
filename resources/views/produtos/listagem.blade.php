@extends('layouts.app')

@section ('titulo')
listagem dos produtos
@stop

@section('content')
<div class="row">

@if(empty($produtos))
<div class="alert alert-danger">
<p>Você não tem nenhum produto cadastrado.</p>
</div>

@else

	<h3>Produtos</h3>
  <hr>

  <a href="{{ route('produtos.novo') }}"  class="btn btn-success pull-right btn-tooltip" data-toggle="tooltip" data-placement="top" title="" data-container="body" data-original-title="+ Produtos"><i class="fa fa-plus" aria-hidden="true"></i></a>

<br />
<br />

@include('partials._messages')
	<table class="table table-hover table-striped table-bordered">
  <thead>
       <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Valor</th>
          <th>Quantidade</th>
          <th>Categoria</th>
          <th>Ação</th>
       </tr>
 </thead>
   @foreach ($produtos as $p)
   
   <tr class="{{ $p->quantidade<=1 ? 'danger' : '' }}">
      <td>{{ $p->id }} </td>
      <td> {{ $p->nome }} </td>
      <td> {{ $p->descricao }}</td>
      <td>{{ $p->valor }} </td>
      <td>{{ $p->quantidade }} </td>
      <td>{{ $p->categoria->nome }} </td>


      <td width="1%" nowrap="nowrap">
      <a href="{{route('produtos.mostra', $p->id )}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-container="body" data-original-title="detalhes"><span class="glyphicon glyphicon-search"></span></a>

      <a href="{{route('produtos.edit', $p->id)}}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-container="body" data-original-title="editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

      <a href="{{route('produtos.delete', $p->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-container="body" data-original-title="deletar"><i class="fa fa-trash-o" aria-hidden="true" alt="deletar"></i></a>
      </td>

   </tr>
  @endforeach

	</table>
  @endif

  <h4>
<span class="label label-danger pull-right">
Um ou menos itens no estoque
</span>
</h4>
 <div class="text-center">
        {{$produtos->render() }}
    </div>
</div>
@stop