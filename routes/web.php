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

Route::get('/', 'IndexController@home');

Route::get('/gallery', 'IndexController@index');

Route::get('/our-work', 'PictureController@ourWork');

Route::get('/about-us', 'IndexController@about');

Route::get('/contact', 'IndexController@contact');

Route::post('/ajax-pictures', 'PictureController@store');

Route::post('/store-pix', 'PictureController@create')->name('store_route');

Route::post('/category', 'CategoryController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/', 'PictureController@home');
    Route::get('/picture', 'PictureController@index');
    Route::get('/gallery', 'PictureController@gallery');
    Route::get('/testimony', 'TestimonyController@index');
    Route::post('/store-testimony', 'TestimonyController@store');
});
