<?php

use Illuminate\Auth\AuthenticationException;

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

//Routes Admin
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/admin','AdminlteController@index')->name('admin')->middleware('role:administrador');
Route::get('/pdf/asc','PdfController@users')->name('pdf_asc')->middleware('role:administrador');
Route::get('/pdf/desc','PdfController@users2')->name('pdf_desc')->middleware('role:administrador');
Route::get('/pdf/dni/asc','PdfController@users3')->name('pdf_dni_asc')->middleware('role:administrador');
Route::get('/pdf/dni/desc','PdfController@users4')->name('pdf_dni_desc')->middleware('role:administrador');
Route::get('/pdf/poblacio/asc','PdfController@users5')->name('pdf_poblacio_desc')->middleware('role:administrador');
Route::get('/pdf/poblacio/desc','PdfController@users6')->name('pdf_poblacio_desc')->middleware('role:administrador');

//Admin resource
Route::resource('users','AdminUserController')->middleware('role:administrador');
Route::resource('categories','AdminCategoryController')->middleware('role:administrador');
Route::resource('products','AdminProductsController')->middleware('role:administrador');

/*User*/
//Route::resource('/feed', 'FeedController');
Route::get('/feed','FeedController@index')->name('feed');
//Route::resource('/cart','CartController');

//Route::get('/cart/{id}','CartController@index')->name('cart_index');
Route::get('/cart','CartController@index')->name('cart_index');
//Route::get('/cart/edit/{id}','CartController@update')->name('cart_edit');
//Route::get('/cart/delete/{id}','CartController@destroy')->name('cart_delete');

//Views
Route::get('/login','AuthViewsController@index')->name('login')->middleware('guest');
Route::get('/register','AuthViewsController@index2')->name('register')->middleware('guest');

//Shop
//Route::resource('product','ShopProductController');
Route::get('/','ShopProductController@index')->name('shop');
