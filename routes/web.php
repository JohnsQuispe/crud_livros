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

Route::get('/ ', function(){
  return view('index');
});

Route::get('/livros/cadastro', function(){
  return view('cadastro_livro');
});

Route::post('/livros/salvar', 'LivroController@salvar');

Route::get('/livros', 'LivroController@consultar');

Route::get('/fill/editora', 'MainController@consultar');
Route::get('/fill/autor', 'MainController@consultar');
