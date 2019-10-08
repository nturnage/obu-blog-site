<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Spatie\Permission\Models\Role;
use App\User;

class BlogCreatorController extends Controller
{
	use AuthenticatesUsers;

	public function _construct()
	{
		$this->middleware('auth');
	}

	public function create()
	{
		return view('blogcreator.create');
	}

	public function store(Request $request) 
	{
		$user;
		// KDL - get the user with the email address from the request
		$users = User::all()->where('email', $request->input('email'));

		// KDL - if we didn't find a user with that email we got to make a new user
		if(count($users) == 0)
		{
			//KDL - Create a default user
			$user = new User;
			$user->name = 'New Blog Creator';
			$user->email = $request->input('email');
			$user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
			$user->save();
		}
		else
		{
			$user = $users->pop();
		}

		// KDL - Make the user a blog creator
		$user->assignRole('blog-creator');

		return response("Success", 200);
	}
}

