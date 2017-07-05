@extends('layouts.master')

<style>

</style>

@section('content')
<p class="text-center h3"><img src="{{ asset('storage/'.$user->image) }}" width="64" height="64" alt="Photo">  {{ $user->username }} 
@if ($user->verified)
<img src="{{ asset('storage/verified.png') }}" style="height:16px;" alt="Verified" title="This user is verified" />
@endif

@if ($user->developer)
<img src="{{ asset('storage/developer.svg') }}" style="height:16px;" alt="Verified" title="This user is a Pulsir developer." />
@endif
</p>

@if (count($user->posts))
	@foreach($user->posts as $post)

		@include('layouts.post')

	@endforeach
@endif

@endsection