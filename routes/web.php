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
    return view('tela_login');
});

/* Clientes */
Route::get('/cliente/cadastro', 'ClienteController@telaCadastro')->name('cliente_cadastro');
Route::get('/cliente/listar', 'ClienteController@listar')->name('listar');
Route::get('/cliente/adicionar', 'ClienteController@adicionar')->name('cliente_add');
Route::get('/cliente/excluir/{id}', 'ClienteController@excluir')->name('cliente_delete');
Route::get('/cliente/alterar/{id}', 'ClienteController@telaAlteracao')->name('cliente_update');
Route::post('/cliente/alterar/{id}', 'ClienteController@alterar')->name('cliente_alterar');

/* Vendas */
Route::get('/cliente/cadastro_vendas', 'VendaController@telaCadastroVendas')->name('venda_cadastro');
Route::get('/cliente/listar_vendas', 'VendaController@listar')->name('listar_vendas');
Route::get('/cliente/listar_vendas_geral', 'VendaController@listar')->name('listar_vendas_geral');
Route::get('/cliente/{id}/itens', 'VendaController@itensVenda')->name('vendas_itens');
Route::get('venda/{id}/itens/novo', 'VendaController@telaAdicionarItem')->name('vendas_item_novo');
Route::get('/venda/{id}/itens/remover/{id_produto}', 'VendaController@excluirItem')->name('vendas_item_delete');
Route::post('/cliente/adicionar_venda', 'VendaController@adicionar')->name('venda_add');
Route::post('venda/{id}/itens/adicionar', 'VendaController@adicionarItem')->name('vendas_item_add');

/* Produtos */
Route::get('/produto/cadastro', 'ProdutoController@telaCadastro')->name('produto_cadastro');
Route::get('/produto/adicionar', 'ProdutoController@adicionar')->name('produto_add');

/* Cadastro Login */
Route::get('/tela_cadastro', 'AppController@tela_cadastro')->name('user_cadastro'); // user_cadastro é utilizada para criar novos usuarios de controle
Route::post('/user/adicionar', 'AppController@adicionar')->name('user_add'); // user_add rota responsavel por depositar os dados de novos usiarios no banco de dados

/* Login */
Route::get('/tela_login', 'AppController@tela_login')->name('tela_login');
Route::get('/logout', 'AppController@logout')->name('logout');
Route::post('/login', 'AppController@login')->name('logar');