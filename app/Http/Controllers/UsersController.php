<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function show($username) 
    {
    	$user = User::where('username', $username)->first();
    	if (!isset($user))
    		return view('404');
    	else 
    		return view('users.show', compact('user'));
    }

    public function settings()
    {
    	return view('users.settings');
    }

    public function update() 
    {
        $user = User::find(auth()->user()->id);
        if (!is_null(request()->password)) {
            $this->validate(request(), [
                'password' => 'min:6'
                ]);
            $user->password = bcrypt(request()->password);
            $user->save();
        }

        if (request()->email != auth()->user()->email) {
            $this->validate(request(), [
                    'email' => 'email|unique:users,email'
                ]);
            $user->email = request()->email;
            $user->save();
        }

        if (request()->cucss != auth()->user()->customcss) {
            $user->customcss = request()->cucss;
            $user->save();
        }
        return back();
    }
}
