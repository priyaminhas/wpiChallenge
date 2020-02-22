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

Route::resource('/','dashboardController' );
Route::resource('dashboard','dashboardController');
//Route::get('/quotes/test','quotesController@test');
Route::resource('quotes','quotesController');
Route::get('quotes/create','quotesController@create');
Route::post('/quotes/store','quotesController@store');
Route::get('quotes','quotesController@index');
Route::get('/quotes/edit/{id}','quotesController@edit');
Route::post('/quotes/edit/{id}','quotesController@update');
Route::get('/quotes/delete/{id}','quotesController@destroy');

