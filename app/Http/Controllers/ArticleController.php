<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;

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
                $user = User::all();
                dd($user);
                return view('home.index');
    }

    public function show(Article $id)
    {

    }
    public function create() {
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
