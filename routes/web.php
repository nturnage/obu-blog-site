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


use App\Http\Controllers\HomeController;

//set homepage to posts page
Route::get('/', function() {
    return redirect('/posts');
});

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/posts', 'PostController@index');


//{post} is a wild card that passes the number given to the post object
//todo make this not show unless there is an article
Route::get('/posts/{post}','PostController@show');


Route::group(['middleware' => ['role:blog-creator']], function() {
	Route::get('/blog-creator/create', 'BlogCreatorController@create');
	Route::post('/blog-creator', 'BlogCreatorController@store');
	Route::view('/dashboard', 'dashboard');
	Route::get('/create-post', 'PostController@create');
	Route::post('/posts', "PostController@store");
});
