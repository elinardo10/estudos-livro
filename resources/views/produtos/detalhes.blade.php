@extends('layouts.app')
@section('content')
    <h2>detalhe do produto:  {{ $p->nome }} </h2>

<ul>
    <li>
    <b>Valor:</b> R$ {{ $p->valor }}
    </li>
    <li>
    <b>Descrição:</b> {{ $p->descricao }}
    </li>
    <li>
    <b>Quantidade em estoque:</b> {{ $p->quantidade }}
    </li>
    <li>
    <b>Categoria relacionada:</b> {{ $p->categoria->nome }}
    </li>
</ul>

<a href="{{route('produtos.edit', $p->id)}}" class="btn btn-success">Alterar Cadastro</a>
@stop