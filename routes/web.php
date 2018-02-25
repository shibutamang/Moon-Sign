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
Route::get('/bookmark','MainController@getDate');
Route::post('/bookmark/send', 'MainController@send');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/edit{id}', 'HomeController@edit');
Route::post('/home/edit/update{id}', 'HomeController@update');
Route::get('/home/agents', 'AgentController@listAgent')->name('agents');
Route::post('/home/agents/create', 'AgentController@create');
Route::get('/home/agents/delete{id}', 'AgentController@delete');
Route::get('/home/agents/edit{id}','AgentController@edit');
Route::post('/home/agents/update{id}', 'AgentController@update');
Route::get('/home/bookmark', 'HomeController@customer')->name('customer');
Route::post('/insert', 'AdminController@insert');
Route::get('/edit', 'AdminController@edit');
Route::post('/update', 'AdminController@update');
Route::get('/delete/{id}', 'AdminController@delete');
