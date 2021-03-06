@extends('layouts/master')

@section('title', 'Edit a post')

@section('content')
<form action="/posts/{{ $post->id }}" method="post" id="new" role="form" enctype="multipart/form-data">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	<div class="metadata">
	<div class="form-group"></div><br><br>
	<div class="form-group">
	<input type="text" name="title" id="title-field" class="form-control" value="{{ $post->title }}" class="post-title"  /><br> <span class="post-author">{{ Auth::user()->username }}</span> &middot; <span class="post-tag"> <input id="tags-field" type="text" name="topic" value="{{ $post->topic }}"/></span>
	<div class="pull-right">
	<a href="#" onclick="showElement('ao');">post settings</a>
	</div>
	<div class="pull-right">
	<div id="ao" class="ao" style="display:none;">
	<br><br><br>
	<input type="checkbox" name="anon" value="1"> Post anonymously - can't be edited <br><br>
	<input type="checkbox" name="paste" value="1"> This is a paste <br><br>
	<input type="checkbox" name="noindex" value="1"> Disallow indexing <br><br>
	<input type="text" name="featured_img" id="featured_img" class="img" class="form-control" placeholder="Featured image URL"  />
	<p>Paste a URL to an image that you want to be featured above.</p><br><br>
	<!--
	or upload a featured image:<br><br>
	<input type="file" name="ff">
	-->
	<a href="#" onclick="hideElement('ao')"><small>(hide)</small></a>
	</div>
	</div><br><br> </div>
	<br>
	<div class="form-group">
	<textarea name="body" id="body-field" rows="40" cols="30" placeholder="Type away..." class="form-control">{{ $post->body }}</textarea><small>Post formatted using <a href="http://go.pulsir.eu/markdown" target="_blank">Markdown</a>.</small>
	</div>
	<input type="submit" id="submit" class="btn btn-primary" value="Edit"></div></div>
			
</form>
	@include('layouts.errors')
@endsection
