@extends('layouts.master')

@section('title')
	{{ $widget->title }}
@endsection

@section('content')
	 <article>
        <h2 class="post-title"><a href="/widgets/{{ $widget->id }}">{{ $widget->title }}</a></h2><p class="help-block">{{ $widget->created_at->toFormattedDateString() }} by <a href="/{{ $widget->user->username }}">{{ $widget->user->username }} </a>
        <div class="post-snip">
          <p>{{ $widget->body }}</p>
        </div>
      </article>
      <hr>
@endsection
