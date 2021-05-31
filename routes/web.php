<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    });
    
Route::get('/produtos/novo', 'App\Http\Controllers\ProdutosController@create');
//Rota de cadastro de novo produto
Route::post('/produtos/novo', 'App\Http\Controllers\ProdutosController@store')->name('registrar_produto');
//Rota de Exibição dos dados em tela
Route::get('/produto/ver/{id}', 'App\Http\Controllers\ProdutosController@show');
//Rota de edição dos dados que recebe do formulário
Route::get('produto/editar/{id}', 'App\Http\Controllers\ProdutosController@edit');
//Rota de Alteração dos dados recebidos
Route::post('produto/editar/{id}', 'App\Http\Controllers\ProdutosController@update')->name('alterar_produto');
//Rota para receber os dados que serão excluídos
Route::get('produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@delete');
//Rota de exclusão
Route::post('produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@destroy')->name('excluir_produto');