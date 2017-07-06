@extends('layouts.master')

@section('title', 'Create a widget')

@section('content')
	<form action="/widgets/create" method="POST">
		{{ csrf_field() }}
		<div class="col-sm-12">
			<div class="form-group">
				<input type="text" name="title" id="title-field" class="form-control" placeholder="Add a title..." class="post-title"  /><br> <span class="post-author">{{ Auth::user()->username }}</span>
			</div>
				<textarea name="body" id="body-field" rows="10" cols="10" placeholder="Type away..." class="form-control"></textarea>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="Create">
			</div>
	</form>
	@include('layouts.errors')
@endsection