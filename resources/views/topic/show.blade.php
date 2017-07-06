@extends('layouts.master')

@section('title')

	Viewing topic

@endsection


@section('content')
	<h3>Viewing topic: <a href="/topic/{{ $topic }}">{{ $topic }}</a></h3><p>Here's what people are talking about {{ $topic }}. <a href="/topic">Try another topic</a><hr>
	@if(count($posts))
		@foreach($posts as $post)
			@include('layouts.post')
		@endforeach
		@else
			<h1> :( </h1> No posts are tagged with that.</p></div><h3 style="text-align:center;">That's all we've got on asdasdas.</h3><p style="text-align:center;">Pulsir is a hosted, beautiful and easy to use blogging platform. We take care of everything, no fees or ads on your content. <a href="/posts">Start writing today</a>, for free, forever.</p> </div>
	@endif


@endsection