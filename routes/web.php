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
    return view('welcome');
});

Route::get('/home', 'BlogController@index');

Route::get('/home/blog', 'BlogController@blog');

Route::get('/home/signup', 'BlogController@form');

Route::get('/home/about', 'BlogController@about');

Route::get('/home/blog/1', 'BlogController@show');

Route::get('/home/blog/2', 'BlogController@show2');

Route::get('/home/blog/3', 'BlogController@show3');

Route::get('/home/blog/4', 'BlogController@show4');

Route::get('/home/blog/5', 'BlogController@show5');

Route::get('/home/blog/6', 'BlogController@show6');

Route::get('/home/blog/7', 'BlogController@show7');

Route::get('/home/produk', 'BlogController@product');

Route::get('/home/produk/1', 'BlogController@product1');

Route::get('/home/produk/2', 'BlogController@product2');

Route::get('/home/produk/3', 'BlogController@product3');

Route::get('/home/produk/4', 'BlogController@product4');

Route::get('/home/produk/5', 'BlogController@product5');

Route::get('/home/produk/6', 'BlogController@product6');
