
@extends('layouts/master')

@section('content')

  <div class="col-sm-9">   
      <p class="text-center lead">New posts</p>
      @for($i = 0; $i<3; $i++)
        @include('layouts/post')
      @endfor
</div>
    <div class="col-sm-3">
      @for($i = 0; $i<3; $i++)
        @include('layouts/widget')
      @endfor
    </div>
  </div>
</div>

@endsection