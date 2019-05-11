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
Route::get('/activate', 'Auth\ActivationController@activate')->name('activate');
Route::get('/resend', 'Auth\ActivationController@showResendForm')->name('resend');
Route::post('/resend', 'Auth\ActivationController@resend');

Route::post('/meet', 'FormController@meetus');
Route::post('/contact', 'FormController@contactus');
Route::post('/subscribe', 'Admin\NewsletterController@store');

Auth::routes(['verify'=>true]);

Route::group(['middleware'=>'admin'], function (){
    Route::get('/admin/dashboard', 'Admin\AdminPageController@dashboard')->name('admin');

    Route::get('admin/user/deactivate', 'Admin\UserController@deactivate')->name('user.deactivate');
    Route::post('admin/user/deactivate', 'Admin\UserController@deactivate');
    Route::get('admin/user/activate', 'Admin\UserController@activate')->name('user.activate');
    Route::post('admin/user/activate', 'Admin\UserController@activate');

    Route::post('/admin/newsletter/send', 'Admin\NewsLetterController@sendmail');

    Route::resource('/admin/user', 'Admin\UserController');
    Route::resource('/admin/blog', 'Admin\BlogController');
    Route::resource('/admin/faq', 'Admin\FaqController');
    Route::resource('/admin/newsletter', 'Admin\NewsletterController')->except('store');
    Route::resource('/admin/page', 'Admin\PageController');
    Route::resource('/admin/project', 'Admin\ProjectController');
    Route::resource('/admin/request', 'Admin\RequestController');
    Route::resource('/admin/inbox', 'Admin\InboxController');
    Route::resource('/admin/testimoni', 'Admin\TestimoniController');
    Route::resource('/admin/portfolio', 'Admin\PortfolioController');
});

Route::group(['middleware'=>'user'], function (){
    Route::get('/user/dashboard', 'User\UserPageController@dashboard')->name('user');

    Route::resource('/user/profile', 'User\ProfileController');
    Route::resource('/user/my-request', 'User\MyRequestController');
    Route::resource('/user/order', 'User\OrderController');
    Route::resource('/user/faq-list', 'User\FaqlistController');
});