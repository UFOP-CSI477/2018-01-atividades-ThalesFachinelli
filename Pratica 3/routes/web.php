<?php

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
    return view('index');
});
Route::resource('/procedimentos', 'ProcedimentoController');
Route::resource('/usuarios', 'UsuariosController');
Route::resource('/exames', 'ExamesController');
Route::get('/listarprocedimentosindex', 'ProcedimentoController@listar')->name('listarprocedimentosindex');
Route::get('/cadastrarusuario', 'UsuariosController@cadastroview')->name('cadastrarusuario');
Route::get('/adminhome', 'UsuariosController@adminhome')->name('adminhome');
Route::get('/adminlistar', 'ProcedimentoController@listaradmin')->name('adminlistar');
Route::get('/admincadastrar', 'ProcedimentoController@cadastraradmin')->name('admincadastrar');
Route::get('/adminatualizar', 'ProcedimentoController@atualizaradmin')->name('adminatualizar');
Route::get('/admindeletar', 'ProcedimentoController@deletaradmin')->name('admindeletar');
Route::get('/operadorhome', 'UsuariosController@operadorhome')->name('operadorhome');
Route::get('/operadorlistar', 'ProcedimentoController@listaroperador')->name('operadorlistar');
Route::get('/operadoratualizar', 'ProcedimentoController@atualizaroperador')->name('operadoratualizar');
Route::get('/pacientehome', 'UsuariosController@pacientehome')->name('pacientehome');
Route::get('/pacientecadastrar', 'ExamesController@cadastrarpaciente')->name('pacientecadastrar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
