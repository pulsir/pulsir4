
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title') - Pulsir</title>
    <meta description="Recently added posts">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pulsir.eu/template/whitey/css/generate.php">
    <link rel="shortcut icon" href="https://d.pulsir.eu/assets/midres-final2-logo.png">
    <link rel="icon" href="https://d.pulsir.eu/assets/midres-final2-logo.png">
    <link rel="apple-touch-icon" href="https://d.pulsir.eu/assets/midres-final2-logo.png">
    <meta name="google-site-verification" content="6ERT0DsecI_-Bqg5KmKxgRgsexypl_umxuqVcRn2fxU" />
    <meta name="theme-color" content="#247f77">
    <link href="https://pulsir.eu/template/whitey/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">
    @if(Auth::check())
      <style>
        {{ Auth::user()->customcss }}
      </style>
    @endif
  </head>
  <body>
<div class="landing">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          @include('layouts.nav')
          @yield('content')
 <div class="container">
  @include('layouts.footer')
</div>


<script src="https://oss.maxcdn.com/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://pulsir.eu/template/whitey/whitey.js"></script>
<script>
 new WOW().init();
</script>
</body>

