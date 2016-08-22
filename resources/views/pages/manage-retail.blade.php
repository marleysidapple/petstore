@extends('layouts.app', ['bodyClass' => 'find-us'])

@section('content')

<!-- store section start -->
<section class="store-section"> 
  <div class="container">
      <strong>Contact</strong>
      <div class="ad-your-store">
        <a href="retail-contact.php" title="">Add Your New Contact +</a>
      </div>
      <div class="row">
        <div class="store-wraper mange-store">
          <div class="col-sm-6  col-md-6">
            <div class="store-content">
               <h4>Pet Brunch</h4>
               <p>
                 8763467837
                  Address: Pet Brunch, , New York,NY<br>
                  ZipCode:11004<br>
                  Website:danfetech.com<br>
                  Email:aashish@danfetech.com<br>
                </p>  
                <a href="#" type="button"  data-toggle="modal" class="btn btn-warning" data-target="#myModal">Delete</a>
                <a href="#" type="btn" class="btn btn-primary" title="">Edit</a>
            </div> 
          </div>
        </div>
      </div>
   </div>   
</section>
<!-- store section end  -->

<!-- are you sure section start  -->
<section class="are-your-sure">
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are Your Sure</h4>
        </div>
        <div class="modal-body">
          <button type="button" class="btn btn-success btn-lg">Yes</button>
          <button type="button" class="btn btn-warning btn-lg">No</button>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- are you sure section end  -->

@endsection