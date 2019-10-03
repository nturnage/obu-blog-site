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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
	Route::resource('posts', 'PostsController');
	// KDL - I need to think about this. It may just need to be a blog-creator resource, not a roles resource
	// I think roles would be more like an admin interface. We just want to be able to create blog-creators.
	Route::resource('roles', 'RolesController');
});

Route::get('/', 'HomeController@index');

Route::get('/create', 'ArticleController@create');

Route::get('/demo', 'HomeController@demo');

Route::get('/demo-article', 'ArticleController@testShow');
