@extends('layouts.cover')

@section('content')
<div class="container m-auto">
  <div class="inner cover p-3 mx-auto">

	<div class="row">
	  	<div class="col-md-4">
	  		<img src="{{ asset('storage/images/job.svg')}}" width="250">
	  	</div>

	  	<div class="col-md-8">
		    <h1 class="cover-heading">JOIN US</h1>
		    <p class="lead">Don't hesitate to <a href="mailto:contact@nahazna.com" style="color: #ff8875;">send us</a> an open application, as we're always on the lookout for people with relevant skills to add to our team!</p>
		</div>
	</div>
  </div>
</div>
@endsection