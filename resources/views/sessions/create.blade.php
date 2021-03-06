@extends('layouts.master')

@section('title', 'Sign in')

@section('content')
  <style>
      body {
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
<div class="container">
      <form class="form-signin" action="/login" method="post">
        {{ csrf_field() }}
                <h1 class="text-center"><a href="index.php"><img src="https://d.pulsir.eu/assets/midres-final2-logo.png" width=64 style="border-radius:3px;" alt="Pulsir"></a></h1>
	        <input type="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <span class="help-block"><a href="mailto:say.hello@pulsir.eu">Trouble logging in? Contact us.</a></span>
      </form>
      @include('layouts.errors')
    </div>

@endsection
                            

                            
