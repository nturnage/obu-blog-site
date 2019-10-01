<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
    }

    public function show(Article $id)
    {

    }
    public function create() {
        return view('author.submit-article');
    }
}
