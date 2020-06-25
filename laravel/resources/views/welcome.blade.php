@extends('layouts.cover')

@section('content')

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
        </div>

@endsection