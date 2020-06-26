@extends('layouts.cover')

@section('content')

<div class="container-fluid m-auto d-flex w-100 h-100 p-3 mx-auto flex-column">

	<div class="inner container m-auto cover p-3 mx-auto d-none d-md-block">

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

	<div class="inner container m-auto cover p-3 mx-auto d-md-none">

		<div class="row">
			<div class="col-md-4">
				<img src="{{ asset('storage/images/job.svg')}}" width="250">
			</div>

			<div class="col-md-8">
				<h1 class="cover-heading">JOIN US</h1>
				<p class="lead text-center">Don't hesitate to <a href="mailto:contact@nahazna.com" style="color: #ff8875;">send us</a> an open application, as we're always on the lookout for people with relevant skills to add to our team!</p>
			</div>
		</div>

	</div>

</div>


@endsection