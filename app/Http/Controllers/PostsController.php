<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() 
    {
        $posts = Post::orderBy('updated_at','desc')->limit(14)->get();
    	return view('posts.index', compact('posts'));
    }

    public function show($id) 
    {
        $post = Post::find($id);
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
