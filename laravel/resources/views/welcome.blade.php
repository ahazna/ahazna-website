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
                    Build a beautiful, modern software, websites, and android applications built  with a user-centered design from scratch.
                    </p>
                    
                    <div class="text-center text-md-left">
                      <a href="/contactus" class="btn btn-primary shadow lift mr-1">
                        Contact Us <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                      </a>
                      <a href="" class="btn btn-light lift">
                       View Our Projects
                      </a>
                    </div>

                </div>
                
            </div>
            
        </div>

    </div>

    <div class="container-fluid w-100" style="background-color: #fff; padding-right: 0px;">
        
        <div class="inner container m-auto p-3 mx-auto">
            <h1 class="display-5 text-center"><span style="color: #000">THIS IS OUR </span><SPAN style="color:#dc8577; font-weight: 400" >DESIGN PROCESS</SPAN> </h1>
            <hr/>
            <div class="row align-items-center pt-3" style="color: #000;">
                <div class="col-md-4">
                    <img src="{{ asset('storage/images/project.png')}}" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" alt="..." data-aos="fade-up" data-aos-delay="100" width="100px">
                    <h5 class="mt-3" style="font-weight: bold;">We Learn About Your Project Goals </h5>
                    <p class="mt-2">This is a very crucial part of the process. Before we can start creating effective landing pages for your campaign, we need to know what your overall business goals are. That's why we take the time to speak with every new client and understand what they're looking to achieve through their marketing efforts.</p>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('storage/images/testing.png')}}" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" alt="..." data-aos="fade-up" data-aos-delay="100" width="100px">
                    <h5 class="mt-3" style="font-weight: bold;">We Design a High Fidality Prototype </h5>

                    <p class="mt-2" style="margin-bottom: 60px;">After finalizing the user requirement study we work on the initial draft of your landing page, we pair our experience and expertise with your inputs. This is the recipe to create landing pages that are quite effective and to your liking.</p>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('storage/images/launch.png')}}" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" alt="..." data-aos="fade-up" data-aos-delay="100" width="100px">
                    <h5 class="mt-3" style="font-weight: bold;">Finally, Ideas Become Applications</h5>
                    <p class="mt-2" style="margin-bottom: 81px;">Once we have your approval of our high fidelity prototype we will finalize the coding. We conduct testing to evaluate the usability and functionality of the application using proven practices.</p>
                </div>
            </div>
        </div>
    </div>


@endsection