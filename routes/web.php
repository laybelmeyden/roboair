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

Route::get('/', 'MainController@index');
Route::get('/news', 'MainController@news');
Route::get('/meropriyatiya', 'MainController@meropriyatiya');
Route::get('/photo', 'MainController@photo');
Route::get('/about', 'MainController@about');
Route::get('/news{solo}', 'MainController@newssolo');
Route::get('/meropriyatiya{solo}', 'MainController@meropriyatiyasolo');
Route::get('/photo{solo}', 'MainController@photosolo');
Route::post('/contact_f', 'MainController@contact_f');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
