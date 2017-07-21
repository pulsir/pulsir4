<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class APIController extends Controller
{
    public function show($username) 
    {
    	$user = User::where('username', $username)->first();
    	if (!isset($user))
    		return 'User not found';
    	else
    	{
    		$data = array('data' => $user, $user->posts);
    		echo json_encode($data);
    	}
    }
}
