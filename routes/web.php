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
/*
Route::get('/', function () {
    return view('shop.products.index');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminlteController@index')->name('admin');
Route::get('/pdf/asc','PdfController@users')->name('pdf_asc');
Route::get('/pdf/desc','PdfController@users2')->name('pdf_desc');
Route::get('/pdf/dni/asc','PdfController@users3')->name('pdf_dni_asc');
Route::get('/pdf/dni/desc','PdfController@users4')->name('pdf_dni_desc');
Route::get('/pdf/poblacio/asc','PdfController@users5')->name('pdf_poblacio_desc');
Route::get('/pdf/poblacio/desc','PdfController@users6')->name('pdf_poblacio_desc');
//Route::resource('/feed', 'FeedController');
Route::get('/feed','FeedController@index')->name('feed');
//Route::resource('/cart','CartController');

//Route::get('/cart/{id}','CartController@index')->name('cart_index');
Route::get('/cart','CartController@index')->name('cart_index');
//Route::get('/cart/edit/{id}','CartController@update')->name('cart_edit');
//Route::get('/cart/delete/{id}','CartController@destroy')->name('cart_delete');

//Views
Route::get('/login','AuthViewsController@index')->name('register');
Route::get('/register','AuthViewsController@index2')->name('login');

//Admin
Route::resource('users','AdminUserController');
Route::resource('categories','AdminCategoryController');
Route::resource('products','AdminProductsController');

//Shop
//Route::resource('product','ShopProductController');
Route::get('/','ShopProductController@index')->name('shop');
