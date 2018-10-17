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
    return view('home/index');
});

Route::get('/index', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');

Route::get('/products/index', 'ProductController@index');
Route::get('/products/show', 'ProductController@show');
Route::get('/products/create', 'ProductController@create');
Route::get('/products/edit', 'ProductController@edit');
Route::get('/products/details', 'ProductController@details');
Route::get('/products/delete', 'ProductController@delete');



