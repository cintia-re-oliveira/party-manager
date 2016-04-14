<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

 //SITE 
Route::get('/inicial', 'InicialController@inicio');

Route::get('/galeria', 'InicialController@galeria');

Route::get('/promocoes_cli', 'InicialController@promocoes_cli');

Route::get('/orcamentos_cli', 'InicialController@orcamentos_cli');



Route::get('/login', 'InicialController@logar');
Route::get('/login/conectar', 'InicialController@conectar');

//GERENCIA
Route::get('/inicial/admin', 'InicialController@novo');

Route::get('/cadastros', 'GerenciaController@cadastros');

Route::get('/consultas', 'GerenciaController@consultas');

Route::get('/relatorios', 'GerenciaController@relatorios');

Route::get('/configuracoes', 'GerenciaController@configuracoes');

//AREA ADMIN - Menu
Route::get('/cadastro', 'MenuController@cadastros');

Route::get('/consulta', 'MenuController@consultas');

Route::get('/relatorio', 'MenuController@relatorios');

Route::get('/configuracao', 'MenuController@configuracoes');

//ROTAS DE CLIENTES --- OK
Route::get('/clientes', 'ClienteController@lista');

Route::get('/clientes/mostra/{id}', 'ClienteController@mostra')->where('id', '[0-9]+');

Route::get('/clientes/novo', 'ClienteController@novo');

Route::post('/clientes/adiciona', 'ClienteController@adiciona');

Route::get('/clientes/remove/{id}', 'ClienteController@remove');

//ROTAS DE FORNECEDORES --- OK
Route::get('/fornecedores', 'FornecedorController@lista');

Route::get('/fornecedores/mostra/{id}', 'FornecedorController@mostra')->where('id', '[0-9]+');

Route::get('/fornecedores/novo', 'FornecedorController@novo');

Route::post('/fornecedores/adiciona', 'FornecedorController@adiciona');

Route::get('/fornecedores/remove/{id}', 'FornecedorController@remove');

//ROTAS DE PRODUTOS --- OK
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

//ROTAS DE PROMOÇÕES --- OK
Route::get('/promocoes', 'PromocaoController@lista');

Route::get('/promocoes/mostra/{id}', 'PromocaoController@mostra')->where('id', '[0-9]+');

Route::get('/promocoes/novo', 'PromocaoController@novo');

Route::post('/promocoes/adiciona', 'PromocaoController@adiciona');

Route::get('/promocoes/remove/{id}', 'PromocaoController@remove');

//ROTAS DE ORÇAMENTOS - AREA DO SITE --- OK
Route::get('/orcamentos', 'OrcamentoController@lista');

Route::get('/orcamentos/mostra/{id}', 'OrcamentoController@mostra')->where('id', '[0-9]+');

Route::get('/orcamentos/novo', 'OrcamentoController@novo');

Route::post('/orcamentos/adiciona', 'OrcamentoController@adiciona');

Route::get('/orcamentos/remove/{id}', 'OrcamentoController@remove');

//ROTAS DE USUARIOS - AREA DO ADMIN --- OK
Route::get('/usuarios', 'UsuarioController@lista');

Route::get('/usuarios/mostra/{id}', 'UsuarioController@mostra')->where('id', '[0-9]+');

Route::get('/usuarios/novo', 'UsuarioController@novo');

Route::post('/usuarios/adiciona', 'UsuarioController@adiciona');

Route::get('/usuarios/remove/{id}', 'UsuarioController@remove');

//ROTAS DE SALÃO - AREA DO ADMIN --- OK
Route::get('/salao', 'SalaoController@lista');

Route::get('/salao/mostra/{id}', 'SalaoController@mostra')->where('id', '[0-9]+');

Route::get('/salao/novo', 'SalaoController@novo');

Route::post('/salao/adiciona', 'SalaoController@adiciona');

Route::get('/salao/remove/{id}', 'SalaoController@remove');

//ROTAS DE RESERVAS -- OK
Route::get('/reservas', 'ReservaController@lista');

Route::get('/reservas/mostra/{id}', 'ReservaController@mostra')->where('id', '[0-9]+');

Route::get('/reservas/novo', 'ReservaController@novo');

Route::post('/reservas/adiciona', 'ReservaController@adiciona');

Route::get('/reservas/remove/{id}', 'ReservaController@remove');

//ROTAS DE FOTOS --- 
Route::get('/fotos', 'FotoController@lista');

Route::get('/fotos/mostra/{id}', 'FotoController@mostra')->where('id', '[0-9]+');

Route::get('/fotos/novo', 'FotoController@novo');

Route::post('/fotos/adiciona', 'FotoController@adiciona');

Route::get('/fotos/remove/{id}', 'FotoController@remove');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
