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

Route::get('/', "HomeController@index");
Route::get('/design', "HomeController@design");
Route::get('/web', "HomeController@web");
Route::get('/mobile', "HomeController@mobile");
Route::get('/portfolio', "HomeController@portfolio");
Route::get('/meet', "HomeController@meet");
Route::get('/contact', "HomeController@contact");
Route::get('/login', "HomeController@login");
Route::get('/sign', "HomeController@sign");
Route::get('/checkout', "HomeController@checkout");
Route::get('/review', "HomeController@review");
Route::get('/home', "HomeController@index");

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin'], function (){

});

Route::group(['middleware'=>'user'], function (){

});