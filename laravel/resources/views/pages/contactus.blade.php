@extends('layouts.contactus')

@section('content')

<div class="h-100">

<div class="container-fluid m-auto h-100 d-flex w-100 p-3 mx-auto flex-column">

    <div class="inner container m-auto p-3 mx-auto">
        
        <main role="main" class="inner p-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i> <span>MidereGenet Taxi, kebele 19, Mekelle, Tigray, Ethiopia</span>
                    </div>

                    <div class="mb-3">
                        <i class="fa fa-envelope fa-1x" aria-hidden="true"></i> <a href="mailto:contact@ahazna.com">Contact@ahazna.com</a>               
                     </div>

                    <div>
                        <i class="fa fa-phone-square fa-1x" aria-hidden="true"></i> (+251)-914-024366
                    </div>
                    
                </div>

                <div class="col-md-6">
                    <h1 class="cover-heading mb-3">Get in Touch</h1>
                    <p class="mb-3" style="color: white;">Feel free to get in touch with us. We are always open to discussing new projects. We assure you with our best services. Thank you for contacting us. </p>


                    <form style="text-align: left;" action="/contactus" method="post">
                        {{ csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" id="inputName">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="email">Email</label>
                              <input type="email" name="email" class="form-control" id="inputEmail" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                          </div>

                          @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>

                           @endif

                        <button type="submit" class="btn btn-primary btn-block mb-2">Submit</button>

                    </form>

                    @if(Session::has('alert-success'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alert-success') !!}</em></div>
                    @endif 
                </div>

                    
            </div>

           

           <!--  <div class="mt-2" style="display: inline-flex;">
                <p class="lead mr-2" style="text-align: center">
                  <a class="btn btn-lg btn-secondary">(+251) 914 024 366</a>
                </p>

                <p class="lead" style="text-align: center">
                  <a href="mailto:contactus@ahazna.com" class="btn btn-lg btn-secondary">Contact@ahazna.com</a>
                </p>
            </div>  -->

        </main>

    </div>

</div>

</div>

<!--     <div class="inner container m-auto p-3 background-img mx-auto d-sm-none">
        
        <main role="main" class="inner p-3" style="color: black; background-color: #c870614d;">
            <h1 class="cover-heading">CONTACT US</h1>

            <div class="contact-us-bg">

                <p class="lead" >Adress : 16 kebelle, above catholic church</p>
                <p class="lead" >Mekelle, Tigray, Ethiopia </p>

            </div>

             <div>
                <p class="lead mr-2" style="text-align: center">
                  <a class="btn btn-lg btn-secondary">(+251) 914 024 366</a>
                </p>

                <p class="lead" style="text-align: center">
                  <a href="mailto:contactus@ahazna.com" class="btn btn-lg btn-secondary">Contact@ahazna.com</a>
                </p>
            </div>

        </main>

    </div> -->

@endsection