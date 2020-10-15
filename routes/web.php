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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::any('/shop', 'ShopController@index')->name('shop');
Route::any('/shop/add-shop', 'ShopController@add')->name('/shop/add-shop');
Route::any('/shop/edit/{id}','ShopController@edit')->name('shop/edit'); 
Route::get('/getpincode/{id}', 'ShopController@pincode');

Route::get('/dynamic_dependent', 'ShopController@index');

Route::post('dynamic_dependent/fetch', 'ShopController@fetch')->name('dynamicdependent.fetch');




Route::any('/account', 'AccountController@index')->name('account');
Route::any('/account/add-account', 'AccountController@add')->name('/account/add-account');
Route::any('/account/edit/{id}','AccountController@edit')->name('account/edit');

Route::get('/variant/search-variant', 'VariantController@add')->name('variant/search-variant');



Route::get('/product', 'ProductController@index')->name('product');
Route::any('/product/add-product', 'ProductController@add')->name('/product/add-product');
Route::post('/product/store','ProductController@store')->name('product/store');
Route::any('/product/edit/{id}','ProductController@edit')->name('product/edit');
Route::any('/product/update/{id}','ProductController@update')->name('product/update');
Route::any('/product/productdel/{id}','ProductController@destroy')->name('product/productdel');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
