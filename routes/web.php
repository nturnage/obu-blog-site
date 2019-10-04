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

// KDL - I am making the default web request go to the ArticleController index
// because we want to display all of the articles in a feed. I think it makes more
// sense to hit the articles controller since we are displaying articles.
Route::get('/', 'ArticleController@index');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/create', 'ArticleController@create');

Route::get('/demo-article', 'ArticleController@testShow');
