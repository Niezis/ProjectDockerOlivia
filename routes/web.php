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

Route::get('/contact', 'Contact\ContactMessageController@create')->name('contact.create');
Route::post('/contact', 'Contact\ContactMessageController@store')->name('contact.post');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');


// Oauth
Route::namespace('Oauth')->group(function () {

    Route::get('login/{provider}', 'OauthController@redirectToProvider')->name('provider.redirect');
    Route::get('{provider}/callback', 'OauthController@handleCallbackProvider')->name('provider.callback');
});



Route::middleware(['auth',"role:admin"])->group(function () {
    Route::get('categories/create', 'Category\CategoryController@create')->name('category.create');
    Route::post('categories/post', 'Category\CategoryController@store')->name('category.post');
    Route::get('categories/{category}/edit', 'Category\CategoryController@edit')->name('category.edit');
    Route::put('categories/{category}', 'Category\CategoryController@update')->name('category.update');
    Route::delete('categories/{category}/delete', 'Category\CategoryController@destroy')->name('category.delete');


    Route::get('posts/create', 'Post\PostController@create')->name('post.create');
    Route::post('posts/post', 'Post\PostController@store')->name('post.post');
    Route::get('posts/{post}/edit', 'Post\PostController@edit')->name('post.edit');
    Route::put('posts/{post}', 'Post\PostController@update')->name('post.update');
    Route::delete('posts/{post}/delete', 'Post\PostController@destroy')->name('post.delete');
});

Route::middleware(['auth'])->group(function () {


    Route::get('categories/index', 'Category\CategoryController@index')->name('category.index');
    Route::get('categories/{category}/show', 'Category\CategoryController@show')->name('category.show');

    Route::get('/posts/{post}/show', 'Post\PostController@show')->name('post.show');

});

Route::fallback(function () {
    return abort(404);
});
