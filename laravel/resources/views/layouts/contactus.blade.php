<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ahaz - Electronic & Software Solutions</title>

        <!-- Fonts -->

        <link rel="stylesheet" type="text/css" href="/css/contactus.css">

     </head>
        <body>

            <div class="container navbar-bg">

                <nav class="navbar navbar-expand-sm">
            

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                  <a href="/"><img src="{{ asset('storage/images/logo.png')}}" height="48" class="mr-3"></a>
                  <a class="navbar-brand" href="/"> AHAZ</a>
                    
                    <ul class="nav nav-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/our-services">Our Services</a>
                      </li>
                    
                      <li class="nav-item">
                        <a class="nav-link" href="/contactus">Message Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/vacancy">Jobs</a>
                      </li>
                      
                    </ul>

                    <ul class="nav nav-menu justify-content-end">
                      <li class="nav-item">
                        <a class="nav-link active"  style="border-right: 1px solid white;" href="#">EN</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">TG</a>
                      </li>
                      
                    </ul>

                  </div>

                </nav>
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

                  <p class="mt-3">Nileplex plaza, Mekelle, Tigray, Ethiopia</p>
                  <p>Phone: (+251) 914 -024366</p>
                  <p>Email: contact@ahazna.com</p>

                <p style="text-align: left; color: #d77464">Ethiopia</p>

                </div>

              </div>

            </div>
            <div class="container-flud privacy-footer">
              
              <p style="text-align: center; margin-bottom: 0px;"><img src="{{ asset('storage/images/logo.png')}}" height="48" class="mr-2 p-2"> @ 2020 Ahaz Electronic & Software Solutions</p>
            </div>

            <script src="{{ asset('js/app.js')}}"></script>

        </body>

</html>
