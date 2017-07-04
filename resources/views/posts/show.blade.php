@extends('layouts.master')

@section('content')
<div class="row">
<div class="eleven columns">
<div class="post">
<div class="metadata">
<h1 class="title"><b><a href="p.php?id=520">{{ $post->title }}</a></b></h1><br><span class="post-author"><img src="http://www.gravatar.com/avatar/ab8d45c8ab431e25789721a5cf6618cb?r=pg&d=identicon&s=64" style="height:24px;" class="user-pic-post" /> <a href="/bfw12345">intemperies</a> 
</span></hr><div class="post-body">
<p>{{ $post->body }}</p></div><hr> 
<div class="replies">
<h4>Post replies</h4><p><a href="/posts/{{ $post->id }}/reply"><i class="fa fa-reply"></i> Add your thoughts</a><br><sub>or tag your post with intemperies to reply.</sub></br></div>
@if(count($post->comments)) 
	@foreach($post->comments as $comment)
	<ul class="list-group">
		<li class="list-group-item">
			<strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong>
			{{ $comment->body }}
		</li>
	</ul>
	@endforeach
@else
	<strong>No replies yet.</strong></div>
@endif

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

	@include('layouts.errors')
</div>
@endsection