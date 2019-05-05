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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', "PagesController@index")->name('index');
Route::get('/design', "PagesController@design")->name('design');
Route::get('/web', "PagesController@web")->name('web');
Route::get('/mobile', "PagesController@mobile")->name('mobile');
Route::get('/portfolio', "PagesController@portfolio")->name('portfolio');
Route::get('/meet', "PagesController@meet")->name('meet-us');
Route::get('/contact', "PagesController@contact")->name('contact-us');
Route::get('/checkout', "PagesController@checkout")->name('checkout');
Route::get('/review', "PagesController@review")->name('review');

Auth::routes();

Route::group(['middleware'=>'admin'], function (){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin');
});

//Route::get('/dash', function (){
//   return view('admin.dashboard');
//});

Route::group(['middleware'=>'user'], function (){
    Route::get('/user', function () {
        return view('user.index');
    })->name('user');

});