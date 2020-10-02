<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title> Ahaz Electronic & Software Solutions </title>

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

    <div class="container d-flex w-100 p-3 mx-auto flex-column">

      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">
            <!-- <a href="/" style="text-decoration: none;" ><img src="{{ asset('storage/images/logo.png')}}" height="36" class="mr-2">
            AHAZ</a> -->
            <a href="/" style="text-decoration: none;" >AHAZ</a>
          </h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link {{(Route::currentRouteName() == 'home') ? 'active':''}}" href="/">Home</a>
<!--             <a class="nav-link {{(Route::currentRouteName() == 'aboutus') ? 'active':''}}" href="/aboutus">About</a>
 -->            
<!--  <a class="nav-link {{(Route::currentRouteName() == 'products') ? 'active':''}}" href="/products">Products</a>
 -->            
<!--  <a class="nav-link {{(Route::currentRouteName() == 'services') ? 'active':''}}" href="/services">Services</a>
 -->            
<!--  <a class="nav-link {{(Route::currentRouteName() == 'projects') ? 'active':''}}" href="/projects">Projects</a> -->
            
 
            <a class="nav-link {{(Route::currentRouteName() == 'contactus') ? 'active':''}}" href="/contactus">Contact</a>
            <a class="nav-link {{(Route::currentRouteName() == 'jobs') ? 'active':''}}" href="/jobs">Jobs</a>
            <a class="nav-link {{(Route::currentRouteName() == 'team') ? 'active':''}}" href="/team">Team</a>
          </nav>
        </div>
      </header>

   </div>

    @yield('content')


  <div class="container-flud footer w-100 mastfoot mt-auto d-none d-md-block ">
              
      <div class="row inner footer-menu">
       
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

          <p class="mt-3">Mideregent taxi, kebele 19, Mekelle, Tigray, Ethiopia</p>
          <p>Phone: (+251) 914 -024366</p>
          <p>Email: contact@ahazna.com</p>

        <p style="text-align: left; color: #d77464">Ethiopia</p>

        </div>

      </div>


    <footer class="py-5 bg-dark">

      <div class="container">
     <!--    <p class="m-0 text-center text-white">Copyright © Ahaz Electronic & Software Solutions 2020</p> -->

       <div class="container">
           <div class="row">
            <div class="map col s2">  
              <h4 class="h-widget">Find us</h4>
              <div id="map" class="map"></div>            
            </div>
            <div class="col s2">
              <h4 class="h-widget">Follow us</h4>
                  <span><a href="https://www.facebook.com/AHAZ-100496758394259" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
                  </a></span>
                           
            </div>

              <div class="col s6">
                <p class="h-widget">Copyright © Ahaz Electronic & Software Solutions 2020</p>
              </div>
           </div>
            
          </div>

      </div>

    </footer>


  </div>


<div class="container-flud text-center w-100 p-0 mastfoot text-center mt-auto d-md-none">
              
        <div class="row inner footer-menu">
         
          <div class="col-md-4 mb-2 footer-center-sm" style="border-bottom: 1px solid #b6babd;">

             <p style="color: #d77464;">Our Products</p>

              <p class="mt-3"><a href="#">Smart Id card</a></p>
              <p><a href="#">Electronic tracking devices</a></p>
              <p><a href="#">Electronic security devices</a></p>

          </div>

          
          <div class="col-md-4 mb-2 footer-center-sm" style="border-bottom: 1px solid #b6babd;">
            
            <p style="color: #d77464">Our Services</p>

            <p class="mt-3"><a href="#">Website Design & Development</a></p>
            <p><a href="#">Software Development</a></p>
            <p><a href="#">Network Installation</a></p>
            <p><a href="#">ICT Consultancy</a></p>

        </div>

            
          
          <div class="col-md-4 footer-center-sm">
          
            <p style="color: #d77464">Contact Us</p>

              <p class="mt-3">Mideregenet taxi, kebele 19, Mekelle, Tigray, Ethiopia</p>
              <p>Phone: (+251) 914 -024366</p>
              <p>Email: contact@ahazna.com</p>

            <p style="color: #d77464; text-align: center;">Ethiopia</p>

          </div>

        </div>

        <footer class="py-5 bg-dark">

          <div class="container">
           <div class="row">
            <div class="col s2">
              <h4 class="h-widget">Follow us</h4>
            </div>

              <div class="col s6">
                <p class="m-0 text-center text-white">Copyright © Ahaz Electronic & Software Solutions 2020</p>
              </div>
           </div>
            
          </div>

        </footer>

</div>
            
     <script src="{{ asset('js/app.js')}}"></script>
     <script>
       function initMap(){

        var map = new google.maps.Map(document.querySelector('#map'), {

          center: { lat: 13.4922048, lng: 39.4693142},
          zoom: 7
        }

          )
       }
     </script>
     <script  async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQM0euXEncum5WMKWLgLb6a6h9X4BRbmU&callback=initMap"></script>

</body>

</html>



