@extends('layouts.app', ['bodyClass' => 'find-us'])

@section('content')
<!-- store section start -->
<section class="store-section"> 
  <div class="container">
      <strong>Contact</strong>
      <div class="ad-your-store">
        <a href="<?= route('retailer-contacts.create') ?>" title="">Add Your New Contact +</a>
      </div>
      <div class="row">
        <div class="store-wraper mange-store">
        	<?php foreach ($retailerContacts as $retailerContact): ?>
        		<div class="col-sm-6  col-md-6">
		            <div class="store-content">
		               <h4><?= $retailerContact->name ?></h4>
		               <p>
		                  	Phone number: <?= $retailerContact->phone_number ?>
		                  	Designation: <?= $retailerContact->designation ?><br>
							Address:<?= $retailerContact->street_address ?>, <?= $retailerContact->city ?><br>
							Email: <?= $retailerContact->email ?><br>
							Fax: <?= $retailerContact->fax_number ?><br>
		                </p>  
		                <form action="<?= route('retailer-contacts.destroy', $retailerContact->slug) ?>" method="post">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-warning delete-store">Delete</button>
                    </form>
		                <a href="<?= route('retailer-contacts.edit', $retailerContact->slug) ?>" type="btn" class="btn btn-primary" title="">Edit</a>
		            </div> 
		          </div>
        	<?php endforeach ?>
        	{!! $retailerContacts->links() !!}
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

@section('footer')
<script type="text/javascript" src="<?= asset('js/bootbox.min.js') ?>"></script>
<script type="text/javascript">
    $(document).on('click', 'form', function(e) {
        var currentForm = $(this);
        e.preventDefault();
        bootbox.confirm('Are you sure?', function(result) {
            if(result) {
                currentForm.submit();
            }
        });
    });
</script>
@endsection