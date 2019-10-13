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

Route::get('/', [
 'uses'  => 'TestController@index',
 'as'  	 => '/'
 ]);

Route::get('/about-us', [
 'uses'  => 'TestController@about',
 'as'  	 => '/about-us'
 ]);

Route::get('/services', [
 'uses'  => 'TestController@services',
 'as'  	 => '/services'
 ]);

Route::get('/contact-us', [
 'uses'  => 'TestController@contact',
 'as'  	 => '/contact-us'
 ]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
