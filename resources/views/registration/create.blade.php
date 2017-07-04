@extends('layouts.master')

@section('content')
<div class="login">
	<div class="container">
    	<form action="/register" method="post">
    		{{ csrf_field() }}
			<div class="form-group">
				<h2>Hi.</h2>
				<p>Let's start our new relationship.</p> 
			</div>
			<input type="hidden" name="action" id="action" value="add" />
			<input type="hidden" name="token" id="token" value="" />
			<div class="form-group">
				<label for="username">What's your name?</label>
				<input type="text" name="username" id="username" placeholder="Will be your username. Choose wisely."  class="form-control" required />
			</div>
			<div class="form-group">
				<label for="password">Choose a password.</label>
				<input type="password" name="password" id="password" placeholder="Anything you want."  class="form-control" required />
			</div>
			<div class="form-group">
				<label for="email">Email adress.</label>
				<input type="email" name="email" id="email" placeholder="Important things only. Used for Gravatar." class="form-control" required />
			</div>
			<input type="submit" id="submit" class="btn btn-primary" value="Create an account &rarr;"><br>
		</form>
		@include('layouts.errors')
	</div>
</div>

@endsection