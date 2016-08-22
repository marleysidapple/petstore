@extends('layouts.app', ['bodyClass' => 'home', 'headerImage' => true])

@section('content')

<!-- find-us section start -->
<section class="find-us-section">
  	<div class="container">
     	<div class="row">
        	<strong>Our products are available in the following regions of the world</strong>
    		<div class="find-us-wrap">
      			<div class="col-lg-8 col-lg-offset-2 col-sm-12  ">
       				<div class="search clearfix">
              			<form action="<?= route('search-results') ?>" method="get">
                			<input type="text" name="keyword" size="4" placeholder="enter store name, street address, city or state">
                			<button type="submit"class="btn btn-primary">find your Store</button>
              			</form>
        			</div>
      			</div>
			</div>
      	</div>
  	</div>
</section>
<!-- find-us section end  -->

<!-- store section start -->
<section class="store-section">
    <div class="container">
        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <p class="text-center"><?= $error ?></p>
            </div>
        <?php else: ?>
          	<strong>stores near <?= $keyword ?></strong>
          	<div class="row">
            	<div class="store-wraper">
                <?php if(0 == $results->total()) : ?>
                    <div class="alert alert-info">
                        <p class="text-center">No results found.</p>
                    </div>
                <?php else : ?>
            		<?php foreach ($results as $store): ?>
            			<div class="col-sm-6  col-md-6">
    	            		<div class="store-content">
    	               			<h4><?= $store->store_name ?></h4>
    		               		<p>
    		                  		<?= $store->store_name ?>
    		                  		<?= $store->phone_name ?>
    		                  		<?= $store->street_address ?>, <?= $store->city ?>, <?= $store->state->name ?>
    		                  		<?= $store->website ?>
    		                	</p>
    		            	</div>
    	          		</div>
            		<?php endforeach ?>
                <?php endif; ?>
            	</div>
          	</div>
          	{!! $results->appends(['keyword' => $keyword])->links() !!}
        <?php endif ?>
    </div>
</section>
<!-- store section end  -->
@endsection