<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() 
    {
        $posts = Post::orderBy('created_at','desc')->limit(14)->get();
    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post) 
    {
        $post->comments = $post->comments()->orderBy('created_at', 'desc')->get();
    	return view('posts.show', compact('post'));
    }

    public function create() 
    {
    	return view('posts.create');
    }

    public function store() 
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
            ]);
    	$post = new Post;
    	Post::create([
                'title' => request('title'),
                'body' => request('body')
            ]);

    	return redirect('/posts/'.$post->id);
    }
}
