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

           <!--  <div class="divider" style="font-family:'Lato';"><h2><span></span><span>WELCOME TO AHAZ</span><span></span></h2></div> -->
            
        </div>


    </div>


@endsection