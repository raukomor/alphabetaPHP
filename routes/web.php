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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/comentario/create', 'ComentarioController@create')->middleware('auth');

Route::post('/comentario/store','ComentarioController@store')->middleware('auth');

Route::get('/comentario', 'ComentarioController@index' );

Route::get('/comentario/edit/{id?}','ComentarioController@edit')->middleware('auth');

Route::post('/comentario/update/{id}','ComentarioController@update')->middleware('auth');

Route::get('/comentario/destroy/{id}','ComentarioController@destroy')->middleware('auth');

Route::get('/resposta/create/{id}', 'RespostaController@create')->middleware('auth');

Route::post('/resposta/store','RespostaController@store')->middleware('auth');

Route::get('/resposta/edit/{id?}','RespostaController@edit')->middleware('auth');

Route::post('/resposta/update/{id}','RespostaController@update')->middleware('auth');

Route::get('/resposta/destroy/{id}','RespostaController@destroy')->middleware('auth');