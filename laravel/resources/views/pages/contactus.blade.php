@extends('layouts.contactus')

@section('content')


<div class="container-fluid m-auto h-100 background-img d-flex w-100 p-3 mx-auto flex-column">

    <div class="inner container m-auto p-3 mx-auto">
        
       <main role="main" class="inner cover">
        <h1 class="cover-heading">CONTACT US</h1>

    <div class="contact-us-bg">

        <p class="lead" >Adress : 16 kebelle, above catholic church</p>
        <p class="lead" >Mekelle, Tigray, Ethiopia </p>

        <p class="lead" style="border-bottom: 1px solid white;">Phone : (+251) 914 024366</p>
    </div>
        <p class="lead" style="text-align: center" >
          <a href="mailto:contactus@ahazna.com" class="btn btn-lg btn-secondary">Contact@ahazna.com</a>
        </p>
      </main>

    </div>

<!-- <div class="inner container m-auto cover p-3 mx-auto">
    <div class="row col-md-6 m-auto card text-center">
      <div class="card-header">
        CONTACT US
      </div>

        <div class="card-body">
            <h5 class="card-title">Ahaz Electronic & Software Solutions</h5>
            <p class="card-text">MEKELLE, TIGRAY, ETHIOPIA</p>
            <p class="card-text">PHONE: +251 914 0243 66</p>
            <a href="mailto:contact@nahazna.com" class="btn btn-primary">Contact@ahazna.com</a>
        </div>

      <div class="card-footer text-muted">
            Thank you for reaching us
        </div>
    </div> -->
</div>

<!--   <div class="inner cover p-3 mx-auto">
    <div class="card col-md-6 offset-3 p-0">
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
                        <label for="inputphone">Phone</label>
                        <input type="tel" class="form-control" id="phone" maxlength="14" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea3">Text</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="4" placeholder="Send us your message" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                </form> 
            </div>
        </div>
  </div> -->

</div>
        

@endsection