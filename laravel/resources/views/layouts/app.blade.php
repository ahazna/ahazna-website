<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ahaz - Electronic & Software Solutions</title>

        <!-- Fonts -->

        <link rel="stylesheet" type="text/css" href="/css/app.css">

     </head>
        <body>

            <div class="container">

              <header class="masthead mb-auto">
              <div class="inner">

                <h3 class="navbar-brand" href="/">
                    <a href="/"><img src="{{ asset('storage/images/logo.png')}}" height="42" class="mr-3">AHAZ</a>
                </h3>

                <nav class="navbar navbar-expand-lg">
                  
                    <ul class="nav nav-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/our-services">Our Services</a>
                      </li>
                    
                      <li class="nav-item">
                        <a class="nav-link" href="/contactus">Message Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/jobs">Jobs</a>
                      </li>
                      
                    </ul>

                </nav>
              </div>
            </header>
            </div>


            @yield('content')

            <div class="container-flud footer">
              
              <div class="row">
               
                <div class="col-md-4" style="border-left: 1px solid #b6babd;">

                   <p style="color: #d77464">Our Products</p>

                    <p class="mt-3"><a href="#">Smart Id card</a></p>
                    <p><a href="#">Electronic tracking devices</a></p>
                    <p><a href="#">Electronic security devices</a></p>

                </div>

                
                <div class="col-md-4" style="border-left: 1px solid #b6babd;">
                  
                  <p style="color: #d77464">Our Services</p>

                  <p class="mt-3"><a href="#">Website Design & Development</a></p>
                  <p><a href="#">Software Development</a></p>
                  <p><a href="#">Network Installation</a></p>
                  <p><a href="#">ICT Consultancy</a></p>

                </div>

                  
                
                <div class="col-md-4" style="border-left: 1px solid #b6babd;">
                
                <p style="color: #d77464">Contact Us</p>

                  <p class="mt-3">GENFEL HOTEL, Mekelle, Tigray, Ethiopia</p>
                  <p>Phone: (+251) 914 -024366</p>
                  <p>Email: contact@ahazna.com</p>

                <p style="text-align: left; color: #d77464">Ethiopia</p>

                </div>

              </div>

            </div>
            <div class="container-flud privacy-footer">
              
              <p style="text-align: center; margin-bottom: 0px;"><img src="{{ asset('storage/images/logo.png')}}" height="48" class="mr-2 p-2"> @ 2020 Ahaz Electronic & Software Solutions </p>
            </div>

            <script type="text/javascript" src="/js/app.js"></script>
        </body>

</html>
