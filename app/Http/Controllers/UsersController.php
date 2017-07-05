<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth')->except('show');
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
        if (isset(request()->pic)) {
            $path = request()->file('pic')->store('public');
            $user->image = request()->pic->hashName();
            $user->save();
    }

            if (!is_null(request()->password)) {
            $this->validate(request(), [
                'password' => 'min:8'
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
