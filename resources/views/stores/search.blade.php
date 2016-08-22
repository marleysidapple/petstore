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
      			<div class="find-us-content">
            		<ul>
              			<li class="col-sm-4 ">
                			<h4>Alabama</h4>
                			<a href="find-us-inner.php">Daphne</a>
			                <a href="#"> Dothan</a>
			                <a href="#">Harpersville</a>
			                <a href="#">Mobile</a>
			                <a href="#">Montgomery</a>
			                <a href="#">Northport</a>
			                <a href="#">Vestavia hills</a>
              			</li>
			            <li class="col-sm-4">
			                <h4>Alaska</h4>
			                <a href="#">Anchorage</a>
			                <a href="#"> Juneau</a>
			                <a href="#">Ketchikan</a>
			                <a href="#">Anchorage</a>
			                <a href="#"> Juneau</a>
			                <a href="#">Ketchikan</a>
			            </li>
			            <li class="col-sm-4 ">
			                <h4>Alberta</h4>
			                <a href="#">Calgary</a>
			                <a href="#"> Langdon</a>
			                <a href="#">Lethbridge</a>
			                <a href="#">Red deer</a>
			            </li>
			            <li class="col-sm-4 ">
			                <h4>Arizona</h4>
			                <a href="#">Buckeye</a>
			                <a href="#"> Cave creek</a>
			                <a href="#">Chandler</a>
			                <a href="#">Chino valley</a>
			                <a href="#">Corona de tucson</a>
			                <a href="#"> Fountain hills</a>
			                <a href="#">Glendale</a>
			                <a href="#">Mesa</a>
			                <a href="#">Peoria</a>
			                <a href="#"> prescott valley</a>
			                <a href="#">Scottsdale</a>
			                <a href="#">Tempe</a>
			                <a href="#"> Tuscon</a>
			            </li>
			            <li class="col-sm-4">
                  			<h4>British Columbia</h4>
              				<a href="#">vancouver</a>
		                  	<a href="#"> Burnaby</a>
		                  	<a href="#">Chilliwack</a>
		                  	<a href="#">Coquitlam</a>
		                  	<a href="#"> Kamloops</a>
		                  	<a href="#">Kelowna</a>
		                  	<a href="#">Langley</a>
		                  	<a href="#"> Nanaimo</a>
		                  	<a href="#"> North vancouver</a>
		                  	<a href="#"> pitt meadows</a>
		                  	<a href="#"> port moody </a>
		                  	<a href="#"> Revalstoke</a>
		                  	<a href="#"> Richmond</a>
		                  	<a href="#"> south surrey</a>
		                  	<a href="#"> surrey</a>
		              	</li>
			            <li class="col-sm-4">
		                  	<h4>California</h4>
		                  	<a href="#">benicia</a>
		                  	<a href="#"> Agoura hills </a>
		                  	<a href="#">Alameda</a>
		                  	<a href="#">Albany</a>
		                  	<a href="#"> Anaheim</a>
		                  	<a href="#">Aptos</a>
		                  	<a href="#">Arcadia</a>
		                  	<a href="#">  canyon</a>
		                  	<a href="#"> BanningBell</a>
		                  	<a href="#"> pitt meadows</a>
		                  	<a href="#"> port moody </a>
		                  	<a href="#"> Revalstoke</a>
		                  	<a href="#"> Richmond</a>
		                  	<a href="#"> south surrey</a>
		                  	<a href="#"> surrey</a>
		              	</li>
            		</ul>
      			</div>
			</div>
      	</div>
  	</div>
</section>
<!-- find-us section end  -->
@endsection