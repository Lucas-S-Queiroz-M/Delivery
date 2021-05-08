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

Route::get('/index', 'HomeController@index')->name('index');
Route::get('/', 'LoginClienteController@login')->name('login');
Route::get('/loginParceiro', 'LoginParceiroController@loginParceiro')->name('loginParceiro');
Route::get('/CadastroParceiro', 'CadastroParceiroController@CadastroParceiro')->name('CadastroParceiro');
Route::get('/CadastroCliente', 'CadastroClienteController@CadastroCliente')->name('CadastroCliente');
Route::get('/FaleConosco', 'FaleConoscoController@FaleConosco')->name('FaleConosco');
Route::get('/Cardapio', 'CardapioController@Cardapio')->name('Cardapio');
Route::get('/Pagamento', 'PagamentoController@Pagamento')->name('Pagamento');
Route::get('/Finalizar', 'FinalizarController@Finalizar')->name('Finalizar');
Route::get('/ListarClientes', 'ListarClientesController@ListarClientes')->name('ListarClientes');
Route::get('/CadastradoComSucesso', 'CadastradoComSucessoController@CadastradoComSucesso')->name('CadastradoComSucesso');
Route::get('/CadastradoComSucessoFornecedor', 'CadastradoComSucessoFornecedorController@CadastradoComSucessoFornecedor')->name('CadastradoComSucessoFornecedor');
Route::get('/Carrinho', 'CarrinhoController@Carrinho')->name('Carrinho');
Route::get('/CadastroCardapio', 'CadastroCardapioController@CadastroCardapio')->name('CadastroCardapio');
Route::get('/login', 'LoginClienteController@login');
Route::post('/logar', 'LoginClienteController@logar')->name('logar');
Route::get('/logout', 'LoginClienteController@logout');
Route::post('/acessar', 'LoginParceiroController@acessar')->name('acessar');
Route::get('/CadastradoComSucessoCardapio', 'CadastradoComSucessoCardapioController@CadastradoComSucessoCardapio')->name('CadastradoComSucessoCardapio');
