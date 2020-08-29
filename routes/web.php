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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Oauth')->group(function () {

    Route::get('login/{provider}', 'OauthController@redirectToProvider')->name('provider.redirect');
    Route::get('{provider}/callback', 'OauthController@handleCallbackProvider')->name('provider.callback');
});

