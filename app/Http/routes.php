<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->route('produtos.index');
});

Route::group(['middleware' => 'auth'], function(){
		Route::group(['prefix' => 'produtos'], function(){
		route::get('',     ['as'=> 'produtos.index', 'uses' => 'ProdutosController@lista']);
		Route::get('mostra/{id}', ['as' => 'produtos.mostra', 'uses' => 'ProdutosController@mostra']);
		Route::get('novo', ['as' => 'produtos.novo', 'uses' => 'ProdutosController@novo'] );
		Route::post('adicionar', ['as' => 'produtos.adcionar', 'uses' => 'ProdutosController@adicionar']);
		Route::get('remover/{id}', ['as' => 'produtos.delete', 'uses' => 'ProdutosController@delete']);
		Route::get('editar/{id}', ['as' => 'produtos.edit', 'uses' => 'ProdutosController@edit']);
		Route::post('edit/{id}', ['as' => 'produtos.update', 'uses' => 'ProdutosController@update']);
 	});

});


Route::auth();