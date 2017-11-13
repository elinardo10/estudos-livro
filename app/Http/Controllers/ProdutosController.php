<?php

namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use estoque\Product;
Use estoque\Categoria;
use estoque\Http\Requests\ProdutosRequest;

use Request;
use Session;


class ProdutosController extends Controller
{
    public function lista(){
  

	$produtos = Product::paginate(10);
	
		  

	return view('produtos.listagem')->with(compact('produtos', 'addresses'));
}

public function mostra($id){
	
    $produto = Product::find($id);

	if(empty($produto)) {

    return redirect()->route('produtos.index' )->withErrors(['O Produto não localizado']);
 }

	return view('produtos.detalhes')->with('p', $produto);
  
		 
}

public function novo(){
	

	return view('produtos.novo')->with('categorias', Categoria::all());
  
}

public function adicionar(ProdutosRequest $request){
	Product::create($request->all());

	Session::flash('msgsuccess', 'O Produto foi cadastrado com sucesso!');
	return redirect()->route('produtos.index');
}


public function edit($id){

	$produto = Product::find($id);

	return view('produtos.edit')->with('p', $produto);


}

public function update(ProdutosRequest $request, $id){
	$input = Request::only('nome', 'descricao', 'valor', 'quantidade');
	
	$produto = Product::find($id);
	$produto->nome = $input['nome'];
	$produto->descricao = $input['descricao'];
	$produto->valor = $input['valor'];
	$produto->quantidade = $input['quantidade'];
	$produto->save();

	Session::flash('msgsuccess', 'O Produto foi alterado com sucesso');

	return redirect()->route('produtos.index', $id);

}

public function delete($id){
	$produto = Product::find($id);

		if(empty($produto)) {

    return redirect()->route('produtos.index' )->withErrors(['O Produto não localizado']);
		}

	$produto->delete();

	//Session::flash('msgsuccess', 'O Produto foi deletado com sucesso');

	return redirect()->route('produtos.index' )->with('msgsuccess', 'O Produto foi deletado com sucesso');
}

}