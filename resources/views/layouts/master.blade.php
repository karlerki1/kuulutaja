<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
		<link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css')}}">
    @yield('styles')
  </head>

  <body>
    @include('includes.header')
    <div class="main">
      @yield('content')

    </div>

  </body>
</html>
