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
    return view('index');
});

Route::get('/gallery', 'IndexController@index');

Route::get('/about-us', 'IndexController@about');

Route::get('/contact', 'IndexController@contact');

Route::get('/dashboard', 'PictureController@home')->middleware('auth');

Route::get('/dashboard/picture', 'PictureController@index');

Route::post('/ajax-pictures', 'PictureController@store');

Route::post('/store-pix', 'PictureController@create')->name('store_route');

Route::post('/category', 'CategoryController@store');

Route::get('/dashboard/gallery', 'PictureController@gallery');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
