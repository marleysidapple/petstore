@extends('layouts.app', [
	'bodyClass' => 'home',
	'headerImage' => true,
	'headerImageSource' => asset('images/quality.jpg')
])

@section('content')
<section class="mission-sections eurofins" style="background:#fbf7f4);
background-position: center top;">
<div class="container">
	<div class="row">
		<div class="join-us carrer" style="background:none" > <strong style="color:#00a59b;">Nutrition analysis and tests are conducted by: </strong>
			<div class="col-sm-12 text-center">
			<img class="text-center" style="margin-bottom:20px; " src="<?= asset('images/eurofin_nglogo.jpg') ?>" alt="logo">
				<p style="text-align:center; padding-bottom:20px;">Eurofins Scientific Inc. Nutrition Analysis Center, 2200 Rittenhouse Street, Suite 150, Des Moines, IA 50321 & Department of Food Technology And Quality Control, Kathmandu, Nepal.</p>
			</div>
		</div>
	</div>
</div>
</section>
<section class="mission-sections">
	<div class="container">
		<div class="row">
			<div class="join-us carrer" style="background:none;"> <strong style="color:#00a59b;">Quality Assurance </strong>
				<div class="col-sm-6">
					<div class="mission-wrapper second-wrapper">
						<p>With a belief in quality, Royal Dog Chew is prepared from Churpi made from milk collected from quality-approved dairy cooperatives. For the production of Royal Dog Chew, not a single drop of milk is drawn from yaks or cows who have fed with inorganic nutriments.  Thousands of meager-earning farmers living in Himalayan regions of eastern Nepal, draw milk from mammary glands of currently or recently pregnant yak, cow, chauri, who graze in natural vegetation of higher altitude, through "hand milking", a process performed by massaging and pulling down on the teats of the udder, squirting the milk into a bucket. </p>
						<p>The farmers collects the milk in a clean kettle, and is transported to a collection center. </p>
						<img src="<?= asset('images/transporting_milk.jpg') ?>" width="538" height="358" alt="Royal Dog Chew">

						<p>When the milk is collected at the dairy collection center, Quality Inspectors inspect the quantity, quality, composition and hygiene of the milk. Following tests are done to ensure quality production of Royal Dog Chew </p>

						<h5>a.Lactometer Test </h5>
						<p> Lactometer testing is done at all counterpart dairies before accepting the milk from the farmers to confirm the quality of the milk. Lactometer testing is done to measure the density of milk, and inspect the concentration of water added to it. </p>
						<p>At 15 degree Celsius, normal density of milk ranges from 1.028 to 1.033 g/ml, whereas, density of water is 1.0 g/ml. The lactometer testing helps in inspecting the concentration of water in the milk. If the test records higher concentration of water, the Quality Inspector rejects purchasing the milk. </p>



					</div>
				</div>
				<div class="col-sm-6">
					<div class="mission-wrapper">
						<h5>b.Moisture Test </h5>
						<img src="<?= asset('images/moisture.png') ?>" alt="Royal Dog Chew">
						<p> Moisture testing is undertaken with the use of Wagner Moisture Meters before transporting it to Kathmandu-based station. Quality Inspectors accept the product having the moisture of 10 to 11 %. </p>

						<h5>c. Fat Testing </h5>
						<p> Fat testing is an integral part of our quality test. Trained staffs of dairy collection center conduct the fat testing, and accept milk that contains 0.7 to 1.0 percent of fat because consumption of cheese containing higher percentage of fat results in vomiting and diarrhea among dogs. </p>

						<h5>d. Nutrient Testing </h5>
						<p> Only milk containing 51 to 54% of protein, 30 to 32 % of carbohydrates and 5.5. to 6% of ash food is selected to prepare Royal Dog Chew, and testing for all these nutrients are undertaken at Department of Food Technology And Quality Control, Kathmandu. </p>

						<h5>e. Texture Testing</h5>
						<p> After the final cleaning and shaping of the final products, they are tested for texture match, a mandatory testing phase set by our Quality Assurance Department. The finished product is wrapped with jute stripe to give smooth texture to the product.</p>
					</div>
				</div>
			</p>
		</div>
	</div>
</div>
</section>

<!-- helping section start  -->
<section class="help-section">
	<h6>Need Help?</h6>
    <ul>
	    <li><a href="#">Find a Location  </a>|</li> 
	    <li><a href="product.php">product Guide</a>|</li> 
	    <li><a href="#">Gift Cards</a>|</li>  
	    <li><a href="#">offers</a>|</li>      
	    <li><a href="#">become a reseller</a></li> 
    </ul>
	<strong>
		<ins>OR</ins> 
		Call: +267-255-0002 
	</strong>
</section> 
<!-- helping section end  -->
@endsection