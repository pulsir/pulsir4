<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Widget;

class PostsController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() 
    {
        $widgets = Widget::orderBy('updated_at', 'desc')->limit(14)->get();
        $posts = Post::orderBy('created_at','desc')->limit(14)->get();
    	return view('posts.index', compact('posts', 'widgets'));
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
    	
        auth()->user()->publish(new Post(request(['title', 'body', 'topic'])));

    	return redirect('/posts/'.$post->id);
    }

    public function destroy(Post $post)
    {
        if ($post->user->id == auth()->user()->id) {
            $post->destroy($post->id);
            return redirect('/'.$post->user->username);
        }
    }

    public function showEdit(Post $post) 
    {
        if ($post->user->id == auth()->user()->id) {
            return view('posts/edit', compact('post'));
        }
        else return redirect('/404');
    }

    public function edit(Post $post) 
    {
        if ($post->title != request()->title) {
            $this->validate(request(), [
                    'title' => 'required'
                ]);
            $post->title = request()->title;
        }

        if ($post->topic != request()->topic) {
            $this->validate(request(), [
                    'topic' => 'required'
                ]);
            $post->topic = request()->topic;
        }

        if ($post->body != request()->body) {
            $this->validate(request(), [
                    'body' => 'required'
                ]);
            $post->body = request()->body;
        }

        $post->save();
        return back();
    }
}
