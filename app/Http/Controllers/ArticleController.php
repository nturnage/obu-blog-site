<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
	use AuthenticatesUsers;

	public function _construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
		return view('home.index');
    }

    public function show(Article $id)
    {

    }

    public function create() 
	{
		//KDL - To check permissions, we call auth() to find out who is logged in 
		//and we call user() to get that user and we call can() on that user with
		//the name of the permission 
		if((auth()->user() != null) && (auth()->user()->can('create new post')))
		{
        	return view('author.submit-article');
		}
		else
		{
			return abort(403);
		}
    }

    public function testShow()
    {
        return view('home.article');
    }
}
