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
        <a href="/" style="text-decoration: none;" ><img src="{{ asset('storage/images/logo.png')}}" height="36" class="mr-2">
        AHAZ</a>
      </h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link" href="/Projects">Projects</a>
        <a class="nav-link" href="/our-services">Our Services</a>
        <a class="nav-link" href="/team">Team</a>
        <a class="nav-link" href="/contactus">Contact</a>
        <a class="nav-link" href="/jobs">Jobs</a>
      </nav>
    </div>
  </header>
  

    @yield('content')

</div>

<div class="container-flud footer mastfoot mt-auto d-none d-sm-block">
              
              <div class="row inner">
               
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

      <div class="container-flud footer mastfoot mt-auto d-block d-sm-none">
              
              <div class="row inner">
               
                <div class="col-md-4 mb-2" style="border-bottom: 1px solid #b6babd;">

                   <p style="color: #d77464">Our Products</p>

                    <p class="mt-3"><a href="#">Smart Id card</a></p>
                    <p><a href="#">Electronic tracking devices</a></p>
                    <p><a href="#">Electronic security devices</a></p>

                </div>

                
                <div class="col-md-4 mb-2" style="border-bottom: 1px solid #b6babd;">
                  
                  <p style="color: #d77464">Our Services</p>

                  <p class="mt-3"><a href="#">Website Design & Development</a></p>
                  <p><a href="#">Software Development</a></p>
                  <p><a href="#">Network Installation</a></p>
                  <p><a href="#">ICT Consultancy</a></p>

                </div>

                  
                
                <div class="col-md-4">
                
                <p style="color: #d77464">Contact Us</p>

                  <p class="mt-3">Nileplex plaza, Mekelle, Tigray, Ethiopia</p>
                  <p>Phone: (+251) 914 -024366</p>
                  <p>Email: contact@ahazna.com</p>

                <p style="text-align: left; color: #d77464">Ethiopia</p>

                </div>

              </div>

            </div>

            <div class="container-flud privacy-footer">
              
              <p style="text-align: center; margin-bottom: 0px; color: #2c3e50;"><img src="{{ asset('storage/images/logo.png')}}" height="48" class="mr-2 p-2">Ahaz Electronic & Software Solutions @ 2020 </p>
            </div>
     <script src="{{ asset('js/app.js')}}"></script>

</body>