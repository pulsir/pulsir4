<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TopicsController extends Controller
{
    public function index() 
    {
    	return view('topic.index');
    }

    public function redirect()
    {
    	return redirect('/topic/'.request()->view);
    }

    public function show($topic)
    {
    	$posts = Post::where('topic', $topic)->get();
    	return view('topic.show', compact('topic', 'posts'));
    }
}
