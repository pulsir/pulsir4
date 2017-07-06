
@extends('layouts/master')

@section('title', 'New posts')


@section('content')

  <div class="col-sm-9">   
      <p class="text-center lead">New posts</p>
      @foreach($posts as $post)
        @include('layouts.post')
      @endforeach
</div>
    <div class="col-sm-3">
      @foreach($widgets as $widget)
        @include('layouts.widget')
      @endforeach
    </div>
  </div>
</div>

@endsection