<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create() 
    {
    	return view('registration.create');
    }

    public function store() 
    {
    	// Validate the request 

    	$this->validate(request(), [
    			'username' => 'required|unique:users,username|alpha_num',
    			'email' => 'required|email|unique:users,email',
    			'password' => 'required|confirmed|min:8'
    		]);

    	// Save the user 
    	$user = User::create([ 
				'username' => request('username'),
				'email' => request('email'),
				'password' => bcrypt(request('password'))
				]);


    	// Sign the user up
    	auth()->login($user);

    	return redirect('/posts');
    }
}
