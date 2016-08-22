@extends('layouts.app', ['bodyClass' => 'carrer'])

@section('content')

<!-- carrer-us section start -->
<section class="join-us carrer">
    <strong> carrer Opportunity</strong>
    <p>
          Thank you for your interest in a career with Royal Dogs
           Chew We may not have any open positions right now, but feel
            free to submit a general application for us to keep on file.
            We're always on the hunt for talented people!
    </p>
    <div class="join-us-form ">
        <div class="container">
            <div class="row">
              <div class="join-us-form-wrapper">
                <form action="">
                    <div class="form-group col-lg-6 col-sm-6">
                        <input type="email" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group col-lg-6 col-sm-6">
                        <input type="text" class="form-control"  placeholder="Address">
                    </div>
                    <div class="form-group col-lg-6 col-sm-6">
                        <input type="text" class="form-control"  placeholder="Email">
                    </div>
                    <div class="form-group col-lg-6 col-sm-6">
                        <input type="text" class="form-control"  placeholder="phone Number">
                    </div>
                    <div class="form-group col-lg-6 col-sm-6">
                        <input type="text" class="form-control"  placeholder="Desire Salary">
                    </div>
                    <div class="form-group col-lg-6 col-sm-6">
                      <label for="" class="input-label">
                        Select Files to Upload </label>
                        <input type="file" id="file">
                    </div>
                   <div class="form-group col-lg-12 col-sm-12">
                      <button type="btn" class=" btn btn-primary">Apply Now</button>
                    </div>
                </form>
              </div>
            </div>  
        </div>
    </div>
</section>
<!-- carrer section end  -->

@endsection