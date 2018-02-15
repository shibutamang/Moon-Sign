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

Route::get('/', 'MainController@mainIndex');
Route::get('/bookmark', function(){
    return view('bookmark');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/agents', 'HomeController@agents')->name('agents');
Route::get('/agents/delete{id}', 'HomeController@delete');
Route::get('/customer', 'HomeController@customer')->name('customer');
Route::get('/edit', 'AdminController@edit');
Route::post('/update', 'AdminController@update');
Route::get('/delete/{id}', 'AdminController@delete');
Route::post('/insert', 'AdminController@insert');
