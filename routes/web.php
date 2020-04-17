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
    return view('welcome');
});

Auth::routes();

Route::Resource('produto', 'ProdutoController');

Route::get('/home', 'ProdutoController@index');

Route::get('/novo', 'ProdutoController@novo');

//Route::get('/novo', 'HomeController@index')->name('home');
Route::redirect('welcome', 'novo');

Route::post('/home/remover/{id}', 'ProdutoController@destroy');
//Route::post('/novo', 'ProdutoController@store');


