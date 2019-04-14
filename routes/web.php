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

Route::get('/', "PagesController@index");
Route::get('/design', "PagesController@design");
Route::get('/web', "PagesController@web");
Route::get('/mobile', "PagesController@mobile");
Route::get('/portfolio', "PagesController@portfolio");
Route::get('/meet', "PagesController@meet");
Route::get('/contact', "PagesController@contact");
Route::get('/login', "PagesController@login");
Route::get('/sign', "PagesController@sign");
Route::get('/checkout', "PagesController@checkout");
Route::get('/review', "PagesController@review");
Route::get('/home', "PagesController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
