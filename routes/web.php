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


Route::group(array('prefix' => 'api/v1/channel'), function()
{
    Route::get('repository', 'RepositoryController@lista');
    Route::get('repository/{id}', 'VendaController@listarPorVendedor');
    Route::post('git', 'GitController@downloadRepositories');   
    Route::get('vendas-por-vendedor/{id}', 'VendaController@listarPorVendedor');    
    Route::post('venda/create', 'VendaController@create');

});