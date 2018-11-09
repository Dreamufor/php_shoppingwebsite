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
Route::get('/home', 'HomeController@index')->name('home');


Route::get('index', 'HomeController@index');
Route::get('/home/about', 'HomeController@about');
Route::get('/home/contact', 'HomeController@contact');


Route::get('/product/display/{id?}', 'ProductController@display') ->name('display');


Route::resource('supplier', 'SupplierController');
Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
Route::resource('order', 'OrderController');
Route::resource('user', 'UserController');

Route::get('order/purchased ', 'ProductController@purchased');

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');


Route::get('/add-to-cart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/addItem/{id}',[
    'uses' => 'ProductController@getAddItem',
    'as' => 'product.addItem'
]);
Route::get('/removeItem/{id}',[
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.removeItem'
]);

Route::get('/removeAll',[
    'uses' => 'ProductController@getRemoveAll',
    'as' => 'product.removeAll'
]);

Route::get('/changeStatus/{id}',[
    'uses' => 'OrderController@changeStatus',
    'as' => 'order.change'
]);

Route::get('/change/{id}',[
    'uses' => 'UserController@changeStatus',
    'as' => 'user.change'
]);