@extends('layouts.master')


@section('title', 'Widgets')


@section('content')
	<div class="row">
		<div class="col-sm-10">
			<h1>Widgets <a href="/widgets/create" class="btn btn-primary">Create a widget</a></h1>
			<table class="table">
				<tr>
					<th>Id</th>
					<th>Title</th>
					<th>Created at:</th>
					<th>Updated at:</th>
					<th>Author</th>
					<th colspan="2">Options</th>
				</tr>
				@foreach($widgets as $widget)
				<tr>
					<td><a href="/widgets/{{ $widget->id }}">{{ $widget->id }}</a></td>
					<td>{{ $widget->title }}</td>
					<td>{{ $widget->created_at->toFormattedDateString() }}</td>
					<td>{{ $widget->updated_at->toFormattedDateString() }}</td>
					<td>{{ $widget->user->username }}</td>
					<td><a class="btn btn-danger" href="/widgets/{{ $widget->id }}/delete">Delete</a></td>
					<td><a class="btn btn-info" href="/widgets/{{ $widget->id }}/edit">Edit</a></td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
@endsection