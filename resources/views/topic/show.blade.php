@extends('layouts.master')

@section('title')

	Viewing topic

@endsection


@section('content')
@if(count($posts))
	<h3>Viewing topic: <a href="/topic/{{ $topic }}">{{ $topic }}</a></h3><p>Here's what people are talking about {{ $topic }}. <a href="/topic">Try another topic</a><hr>
	@foreach($posts as $post)
		@include('layouts.post')
	@endforeach
@endif

@endsection