<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ahaz - Software & Electronics Solutions</title>

        <!-- Fonts -->

        <link rel="stylesheet" type="text/css" href="/css/app.css">

     </head>
        <body>

            <div class="container">

                <nav class="navbar navbar-expand-lg">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <a href="/"><img src="{{ asset('storage/images/logo.png')}}" height="48" class="mr-3"></a>
                  <a class="navbar-brand" href="/"> AHAZ</a>
                    
                    <ul class="nav nav-menu">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Our Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Vacancy</a>
                      </li>
                      
                    </ul>

                  </div>
                </nav>
            </div>


            @yield('content')

            <script type="text/javascript" src="/js/app.js"></script>
        </body>

</html>
