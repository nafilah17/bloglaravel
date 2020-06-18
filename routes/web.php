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
//HOME
Route::get('/blog', 'BlogController@index');
Route::get('/blog/detail', 'BlogController@detail');

//ADMIN
Route::get('/admin', 'AdminController@index');
// artikel //
Route::get('/artikel', 'ArtikelController@index');

Route::get('/artikel/add', 'ArtikelController@add');

Route::post('/artikel/insert', 'ArtikelController@insert');
