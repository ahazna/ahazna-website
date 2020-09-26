@extends('layouts.cover')

@section('content')
<!-- 
    <div class="container m-auto">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                
                <h1> AHAZ </h1>
                <H3>Electronic & Software Solutions</H3>

            
            </div>
        </div> -->


    <div class="container-fluid h-100 m-auto d-flex w-100 h-100 p-3 mx-auto flex-column">
        
        <div class="inner container m-auto p-3 mx-auto">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">
                    <img src="{{ asset('storage/images/illustration.png')}}" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" alt="..." data-aos="fade-up" data-aos-delay="100">
                </div>

                <div class="col-md-6">
                    <div class="display-4 text-center text-md-left">
                      Welcome to <span style="font-family: 'Abril Fatface', cursive; color: #dc8577;">AHAZ</span> <br>
                      Digital Solutions
                    </div>
                    <p class="lead text-center text-md-left mb-6 mb-lg-8" style="color: #a5b9cc;">
              Build a beautiful, modern softwares, websites and android applications built with user centered design methodology.
            </p>
                </div>
                
            </div>
           
            
        </div>


    </div>


@endsection