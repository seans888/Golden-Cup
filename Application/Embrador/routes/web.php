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
//Authentication Routes
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout')->name('logout');

///Registration Routes
Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register','Auth\RegisterController@register');


//////////////////////////////////////////////////////////////////////
Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('copiers', 'PagesController@getCopiers');
Route::get('kyocera', 'PagesController@getKyocera');
Route::get('ricoh', 'PagesController@getRicoh');
Route::get('parts', 'PagesController@getParts');

Route::get('cart','PagesController@getCart');

