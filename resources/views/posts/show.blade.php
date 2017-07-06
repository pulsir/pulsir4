@extends('layouts.master')

@section('content')
<div class="row">
<div class="eleven columns">
<div class="post">
<div class="metadata">
<h1 class="title"><b><a href="p.php?id=520">{{ $post->title }}</a></b></h1><br><span class="post-author"><img src="{{ asset('storage/'.$post->user->image) }}" style="height:24px;" class="user-pic-post" /> <a href="/{{ $post->user->username }}">{{ $post->user->username }}</a> 
</span></hr><div class="post-body">
<p>{{ $post->body }}</p></div><hr> 
<div class="replies">
	<h4>Post replies</h4><p>
</div>
@if(count($post->comments)) 
	@foreach($post->comments as $comment)
	<ul class="list-group">
		<li class="list-group-item">
			<img width="32px" height="32px" src="{{ asset('storage/'.$comment->user->image) }}"></img>&nbsp;
			<strong><a href="/{{ $comment->user->username }}">{{ $comment->user->username }}</a> replied {{ $comment->created_at->diffForHumans() }}: </strong>
			{{ $comment->body }}
		</li>
	</ul>
	@endforeach
@else
	<strong>No replies yet.</strong></div><br>
@endif
@if (Auth::check())
	<div class="card">
		<div class="card-block">
			<form method="POST" action="/posts/{{ $post->id }}/comment">
					{{ csrf_field() }}
					<div class="form-group">
					<textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
					<br>
					<div class="form-group">
						<input type="submit" id="submit" class="btn btn-primary" value="Add Comment">
					</div>
				</div>
			</form>
		</div>
	</div>
@endif
	@include('layouts.errors')
</div>
@endsection