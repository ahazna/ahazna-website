@extends('layouts.cover')

@section('content')


   <div class="container-fluid m-auto h-100 image-projects d-flex w-100 p-3 mx-auto flex-column">

    <div class="inner container m-auto p-3 mx-auto d-none d-sm-block" style="color: black; font-family: 'Abril Fatface', cursive; background-color: #ffffff8c;">
		
		<h1>Our Projects</h1>

		<p style="text-align: center; font-family: sans-serif; font-weight: lighter;">Here’s a sample of some of our recent projects. Inspired by what you see? Let us take care of your Project.</p>

		<div class="row d-flex justify-content-center p-3">

	    	<span class="input-group-text"><i class="fa fa-phone fa-2x" aria-hidden="true"></i></span>
		  	<p class="lead m-0">
      			<a class="btn btn-lg btn-secondary mr-2">(+251) 914 024 366</a>
    		</p>

		    <span class="input-group-text"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></span>
		  	<p class="lead m-0">
      		<a href="mailto:contact@ahazna.com" class="btn btn-lg btn-secondary">Contact@ahazna.com</a>
    		</p>

	    </div>
	</div>


	<div class="container-fluid">
		<div class="row">
	
			<div class="col-md-4 m-auto">
					
			<h4 style="color:black">Innventory System - For Tablets</h4>

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="{{ asset('storage/images/Login.png')}}" alt="First slide" >
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('storage/images/Home.png')}}" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('storage/images/Stock.png')}}" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

		</div>

	</div>
</div>

</div>





	<div class="inner container m-auto p-2 mx-auto d-sm-none" style="color: black; font-family: 'Abril Fatface', cursive; background-color: #ffffff8c">
		
		<h4>Do you have a project idea reach us!</h4>

		<div class="row d-flex justify-content-center p-3">

		<div class="col-lg-4 col-md-6 mb-4 input-group justify-content-center">
	    	<span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
		  	<p class="lead m-0">
      			<a class="btn btn-secondary mr-2">(+251) 914 024 366</a>
    		</p>
		</div>

		<div class="col-lg-4 col-md-6 mb-4 input-group justify-content-center">

		    <span class="input-group-text"><i class="fa fa-envelope " aria-hidden="true"></i></span>
		  	<p class="lead m-0">
      		<a href="mailto:contactus@ahazna.com" class="btn btn-secondary">Contact@ahazna.com</a>
    		</p>
		</div>

	    </div>

	</div>

</div>



@endsection