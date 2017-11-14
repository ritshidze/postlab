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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/about-us', 'IndexController@about')->name('about');
Route::get('/frequently-asked-questions', 'IndexController@faqs')->name('faqs');
Route::get('/how-it-works', 'IndexController@howItWorks')->name('how');
Route::get('/pricing-and-payments', 'IndexController@pricingAndPayments')->name('price');
Route::get('/deliveries', 'IndexController@deliveries')->name('deliveries');

Route::post('/contact', 'IndexController@contact')->name('contact');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');


//package routes
Route::group(['middleware' => ['auth']], function () {
    Route::post('/package-size', 'PackageController@packageSize')->name('size');
    Route::get('/package-details', 'PackageController@packageDetails')->name('details');
    Route::post('/package-details', 'PackageController@packageDetailsSubmit')->name('details');
    Route::get('/final-confirmation', 'PackageController@packageDate')->name('final');
    Route::post('/final-confirmation', 'PackageController@packageDateConfirmation')->name('finalize');
    Route::get('/payments', 'PaymentsController@index')->name('pay');
    
});

//admin routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'acl']], function () {
    Route::get('/', [
        'user_can' => 'create_acl',
        'uses' => 'IndexController@index'
    ]);
    Route::get('/dashboard', [
        'user_can' => 'create_acl',
        'uses' => 'IndexController@index'
    ]);
});
