<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class BlogCreatorController extends Controller
{
        use AuthenticatesUsers;

        public function _construct()
        {
                $this->middleware('auth');
        }

        public function store(Request $request)
        {
                $user = User::all()->where('email', $request->input('email'))->get();
            $user->assignRole('blog-creator');
                $user->givePermissionTo('create new post');
        }
}
