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
Route::get('/blog/detail/{id}', 'BlogController@detail');

//ADMIN
Route::get('/admin', 'AdminController@index');

// artikel //
Route::get('/artikel', 'ArtikelController@index');
//add-insert
Route::get('/artikel/add', 'ArtikelController@add');
Route::post('/artikel/insert', 'ArtikelController@insert');
//edit-update
Route::get('/artikel/edit/{id}', 'ArtikelController@edit');
Route::post('/artikel/update', 'ArtikelController@update');
//delete
Route::get('/artikel/delete/{id}', 'ArtikelController@delete');

// categories //
Route::get('/categories', 'CategoriesController@index');
//add-insert
Route::get('/categories/add', 'CategoriesController@add');
Route::post('/categories/insert', 'CategoriesController@insert');
//edit-update
Route::get('/categories/edit/{id}', 'CategoriesController@edit');
Route::post('/categories/update', 'CategoriesController@update');
//delete
Route::get('/categories/delete/{id}', 'CategoriesController@delete');


// users //
Route::get('/users', 'UsersController@index');
//add-insert
Route::get('/users/add', 'UsersController@add');
Route::post('/users/insert', 'UsersController@insert');
//edit-update
Route::get('/users/edit/{id}', 'UsersController@edit');
Route::post('/users/update', 'UsersController@update');
//delete
Route::get('/users/delete/{id}', 'UsersController@delete');


// profile //
Route::get('/profile', 'ProfileController@index');
//add-insert
Route::get('/profile/add', 'ProfileController@add');
Route::post('/profile/insert', 'ProfileController@insert');
//edit-update
Route::get('/profile/edit/{id}', 'ProfileController@edit');
Route::post('/profile/update', 'ProfileController@update');
//delete
Route::get('/profile/delete/{id}', 'ProfileController@delete');