<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function demo() {
        return view('home.template-demo');
    }

    public function index() {
        return view('home.index');
    }
}
