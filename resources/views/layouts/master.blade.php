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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <!--<script src="src\js\jquery.js"></script>-->
  <script src="src\js\mainPanelScipts.js"></script>
</html>
