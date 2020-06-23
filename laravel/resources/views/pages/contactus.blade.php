@extends('layouts.contactus')

@section('content')

    <div class="flex-center position-ref full-height background-img">
    	<div class="card col-md-5 p-0">
    		<h5 class="card-header">Message Us</h5>
    		<div class="card-body">
    			<form>

    				<div class="form-group">
    					<label for="inputAddress">Name</label>
    					<input type="text" class="form-control" id="inputName" required>
    				</div>

    				<div class="form-group">
    					<label for="inputAddress">Email</label>
    					<input type="Email" class="form-control" id="inputEmail" required>
    				</div>

    				<div class="form-group">
    					<label for="exampleFormControlTextarea3">Text</label>
    					<textarea class="form-control" id="exampleFormControlTextarea3" rows="4" placeholder="Send us your message" required></textarea>
    				</div>

    				<button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
    			</form>
    		</div>
    	</div>
    </div>

        

@endsection