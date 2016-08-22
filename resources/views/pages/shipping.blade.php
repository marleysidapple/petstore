@extends('layouts.app', ['bodyClass' => 'find-us'])

@section('content')

<!-- shipping section start -->
<section class="join-us shipping">
      <strong>Shipping Product</strong>
      <p>
        You can't have a successful eBay business without a way to ship your goods.
         Here are some tips and tools to help you do it right.
      </p>
      <div class="join-us-form">
        <div class="container">
          <div class="row">
              <div class="join-us-form-wrapper col-lg-8 col-lg-offset-2 col-sm-12  headings">
                  <img src="<?= asset('images/shipping.jpg') ?>" alt="dfd">
              </div> 
          </div>
        </div>
      </div>
</section>
<!-- shipping section start -->

@endsection