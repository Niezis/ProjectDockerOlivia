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


// Oauth
Route::namespace('Oauth')->group(function () {

    Route::get('login/{provider}', 'OauthController@redirectToProvider')->name('provider.redirect');
    Route::get('{provider}/callback', 'OauthController@handleCallbackProvider')->name('provider.callback');
});

// Create Category
Route::get('categories/create', 'Category\CategoryController@create')->name('category.create');
Route::post('categories/post', 'Category\CategoryController@store')->name('category.post');
Route::get('categories/index', 'Category\CategoryController@index')->name('category.index');
Route::get('categories/show/{category}', 'Category\CategoryController@show')->name('category.show');

// Create Post
Route::get('posts/create', 'Post\PostController@create')->name('post.create');
Route::post('posts/post', 'Post\PostController@store')->name('post.post');


