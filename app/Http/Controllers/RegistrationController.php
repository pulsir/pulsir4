<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create() 
    {
    	return view('registration.create');
    }

    public function store() 
    {
    	// Validate the request 

    	$this->validate(request(), [
    			'username' => 'required',
    			'email' => 'required|email',
    			'password' => 'required'
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
