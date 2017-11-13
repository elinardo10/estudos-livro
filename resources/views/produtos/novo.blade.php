@extends('layouts.app')

@section ('titulo')
SysControll || Editar Produtos
@stop

@section('content')

 <div class="row col-md-6">
	<h3>Cadastrar novo</h3>
	 <hr>
<hr>
	@include('partials._messages')
	<form action="{{ route('produtos.adcionar') }}" method="post" >

	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />


		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<label class="mdl-textfield__label" for="sample1">Nome</label>
			<input class="mdl-textfield__input" type="text" name="nome" id="sample1" value="{{ old('nome') }}">
		</div>
<br>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<label class="mdl-textfield__label" for="sample2">Descrição</label>
			<input class="mdl-textfield__input"  type="text" name="descricao" id="sample2" value="{{ old('descricao') }}">
		</div>

		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<label class="mdl-textfield__label" for="sample3">Valor</label>
			<input class="mdl-textfield__input" name="valor" id="sample3" pattern="-?[0-9]*(\.[0-9]+)?">
			<span class="mdl-textfield__error" value="{{ old('valor') }}">Digite um Número Válido</span>
		</div>

		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<label class="mdl-textfield__label" for="sample4">Quantidade</label>
			<input class="mdl-textfield__input" name="quantidade" id="sample4" pattern="-?[0-9]*(\.[0-9]+)?" value="{{ old('valor') }}">
			<span class="mdl-textfield__error">Digite um Número Válido</span>
		</div>

<br>
<div class="form-group">
      <label for="select111" class="col-md-2 control-label">Categoria</label>

      <div class="col-md-10">
        <select name="categoria_id" id="select111" class="form-control">
        @foreach($categorias as $c)
          <option value="{{$c->id}}">{{ $c->nome }}</option>
          @endforeach
        </select>
      </div>
    </div>
	<button type="submit" class="btn btn-primary">Salvar</button>

</form>
 </div>
@stop