<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Cover Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="/css/cover.css">

  </head>
  <body class="text-center">

  <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">
        <img src="{{ asset('storage/images/logo.png')}}" height="42" class="mr-3">
        AHAZ
      </h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">Our Services</a>
        <a class="nav-link" href="#">Message Us</a>
        <a class="nav-link" href="#">Jobs</a>
      </nav>
    </div>
  </header>
  

    @yield('content')

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p><img src="{{ asset('storage/images/logo.png')}}" height="28" class="mr-3"> Ahaz Electronic & Software Solutions @ 2020 </p>
    </div>
  </footer>
</div>

     <script src="{{ asset('js/app.js')}}"></script>

</body>