@extends('layouts.master')

@section('title', 'Viewing topic')

@section('content')
	<div class="ac">
		<h3>See what people are talking about something.</h3>
		<form action="/topic" method="post">
			{{ csrf_field() }}
			<input type="text" name="view" placeholder="Enter a topic" />
		</form>
	</div>
@endsection