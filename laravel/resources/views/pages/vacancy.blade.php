@extends('layouts.cover')

@section('content')

  <div role="main" class=" row inner cover">

  	<div class="col-md-4">
  		<img src="{{ asset('storage/images/job.svg')}}" width="250">
  	</div>
  	<div class="col-md-8">
    <h1 class="cover-heading">JOIN US</h1>
    <p class="lead">Don't hesitate to <a href="mailto:contact@nahazna.com" style="color: #d67363;">send us</a> an open application, as we're always on the lookout for people with relevant skills to add to our team!</p>
	</div>
  </div>

@endsection