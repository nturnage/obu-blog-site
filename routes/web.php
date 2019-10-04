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

// KDL - I am making the default web request go to the ArticleController index
// because we want to display all of the articles in a feed. I think it makes more
// sense to hit the articles controller since we are displaying articles.
Route::get('/', 'ArticleController@index');

<<<<<<< HEAD
Route::group(['middleware' => ['auth']], function() {
        Route::resource('posts', 'PostsController');
        // KDL - I need to think about this. It may just need to be a blog-creator resource, not a roles resource
        // I think roles would be more like an admin interface. We just want to be able to create blog-creators.
        Route::resource('roles', 'RolesController');
});

Route::get('/posts', 'PostController@index');


//{post} is a wild card that passes the number given to the post object
//todo make this not show unless there is an article
Route::get('/posts/{post}','PostController@show');


Route::post('/posts', "PostController@store");
=======
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
>>>>>>> No features added

Route::get('/create-post', 'PostController@create');

<<<<<<< HEAD

=======
Route::get('/demo-article', 'ArticleController@testShow');
>>>>>>> No features added
