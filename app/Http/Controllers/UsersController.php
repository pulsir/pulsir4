<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function show($username) 
    {
    	$user = User::where('username', $username)->first();
    	if (!isset($user))
    		return view('404');
    	else 
    		return view('users.show', compact('user'));
    }
}
