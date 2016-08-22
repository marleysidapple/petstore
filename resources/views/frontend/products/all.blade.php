@extends('layouts.app', [
	'bodyClass' => 'home',
	'headerImage' => true,
	'headerImageSource' => asset('images/products_bg.jpg')
])

@section('content')
<!-- product section wallpaper  -->
<!-- product section wallapper   -->
<!-- product section start  -->
<section class="product-section">
	<div class="container">
		<div class="product-content">
			<h4>Our products</h4>
		</div>
		<div class="product-wrapper">
			<div id="owl-examples" class="owl-carousel">
				<?php foreach ($products as $product): ?>
					<div class="item">
						<div class="row">
							<div class="col-sm-6">
								<div class="product-zoom-wrapper clearfix">
									<div class="product-slider-container">
										<div class="product-sliding">
											<div id="main-image"> <img src="<?= $product->featured_image ?>" width="546" height="348"></div>
										</div>
									</div>
									<ul class="thumb-pic">
										<?php foreach ($product->productGallery as $productGallery): ?>
											<li><img src="<?= $productGallery->image ?>" width="100" height="64"></li>	
										<?php endforeach ?>
									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="product-contents"> <strong style="color:#093;"><?= $product->name ?></strong>
									<?= $product->description ?>
									<div class="ingr"> <ins>INGREDIENTS</ins>
										<p><?= ((null === $product->ingredients || '' === trim($product->ingredients)) ? 'Not Available' : $product->ingredients) ?></p>
									</div>
									<div class="ingr"> <ins>GUARANTEED ANALYSIS</ins>
										<p><?= ((null === $product->guaranteed_analysis || '' === trim($product->guaranteed_analysis)) ? 'Not Available' : $product->guaranteed_analysis) ?></p>
									</div>
									<button type="button" class="btn btn-success btn-sm"data-toggle="modal" data-target="#myModal">Watch The Video</button>
								</div>
							</div>
						</div>
						<div style="margin-bottom:20px;"></div>
						<p><?= $product->common_dog_breeds ?></p>
					</div>
				<?php endforeach ?>
			</div>
			<div class="pproduct-review">
				<div class="tab-wrapper-section">
					<div class="tab-pannel-wrap">
						<ul class="tabs">
							<li rel="tab1" class="active">Description</li>
							<li rel="tab2" class="">FAQS</li>
						</ul>

						<div id="tab1" class="tab-content active" style="display: block;">
							<h5>Royal Dog Chews are Safe</h5>
							<ul>
								<li>100% natural ingredients, including yak milk, cow milk and lime juice</li>
								<li>Contains ‘No Lactose’, ‘No Gluten’, ‘No Grain’, ‘No Binding Agent’, ‘No Chemicals’, ‘No Preservatives’, ‘No Artificial Flavors’, ‘No Colorants’, and ‘No Rawhide’.</li>
								<li>Do not contain corn, soy or wheat</li>
								<li>Easily digestible, long lasting, odorless, stainless and microwave safe.</li>
							</ul>
							<h5>Health Benefits of Dog Chews</h5>
							<ul>
								<li>Improves health of teeth and gums</li>
								<li>Reduces bad breath</li>
								<li>Improves oral and mental health</li>
								<li>Prevents behavior problems, such as chewing inappropriate objects</li>
								<li>Provides necessary protein, carbohydrate and fat</li>
							</ul>


							<div class="size">
								<h5>Expiration Date</h5>
								<p>Shelf life of the products from Royal Dog Chew is not fixed, and it does not have any expiration dates. However, we are incessant on conducting research regarding the storage period and quality deterioration of the product. </p>
							</div>

							<div class="size">
								<h5>Precautionary measures</h5>
								<ul>
									<li> Avoid feeding your puppies with hard and large dog chew.</li>
									<li>If you notice your dog finding it harder to chew or gnaw, soak the chew in hot water for 10 to 15 minutes, and then let it cool for the same period of time in the normal room temperature.</li>
									<li> When a small piece of royal  Dog Chew is leftover, it can be placed in a microwave for 40 seconds or until it puffs up and can be given back to your dog after it cools down for at least 2 minutes</li>
									<li> 2-3 pieces of Royal  Dog Chews during a one week period and  after feeding always  provide adequate fresh drinking water.</li>
									<li>if you notice fibrous white or green or blue spots on the chew stop feeding the dog with it </li>
								</ul>
							</div>

							<div class="size">
								<h5>Available Variety of the Royal Dog Chews</h5>
								<p> Royal Purple : Mix 3 sticks for small dog chew for 15lbs ( 7 kg puppy bites)</p>
								<ul>
									<li>Royal Green : Single stick for 35lbs (15 kg)</li>
									<li>Royal White : Single stick for &lt; 55lbs (&lt; 25kg)</li>
									<li> Royal Orange : Mix 3 sticks / each 50 grams for 65lbs ( &lt; 30kg )</li>
									<li>Royal Blue: Single stick for &lt; 75lbs ( &lt; 35 kg )</li>
									<li>Royal Red : Single Extra-large stick for big-sized dogs &gt; 75lbs (&gt; 35 kg)</li>
									<li>Royal Brown : 2 sticks for jumbo and large dogs (&gt;75lbs and for 65lbs)</li>
									<li> Royal Dog Chew Powder : Total weight 75 gram ( for dog and cat- for each dose 5 gram)</li>
									<li>Royal golden Nuggets : Small pieces of the royal dog chew available in half kilogram and one kilogram packet </li>
								</ul>
							</div>
							<div class="size">
								<h5>Table: Recommended products for your Dogs </h5>
								<p>Royal Dog chew -Packaging the bag and specifications:</p>
								<table width="100%" border="0">
									<tr >
										<th scope="col">Type</th>
										<th scope="col">Recommended age of dog</th>
										<th scope="col">Weight of product</th>
										<th scope="col">No of pcs</th>
										<th scope="col">Weight of Single pcs (in grams)</th>
										<th scope="col">Arrangeme nt</th>
										<th scope="col">Dog size</th>
									</tr>
									<tr>
										<td style="color: white; background: purple;">Royal Purple</td>
										<td>For &lt; 15lbs dogs or (&lt;7kg puppy bites)</td>
										<td>100 gram(3.527 Oz)</td>
										<td>3</td>
										<td>33 gram (1.164 Oz)</td>
										<td>Horizontal</td>
										<td>Small</td>
									</tr>
									<tr>
										<td style="color: white; background: green;">Royal Green</td>
										<td>For &lt; 35lbs dogs or ( &lt; 15kg )</td>
										<td>70 gram(2.469 Oz)</td>
										<td>1</td>
										<td>70 gram 2.469 Oz)</td>
										<td>Horizontal</td>
										<td>Medium</td>
									</tr>
									<tr>
										<td style="color: white; background: lightgray;">Royal White</td>
										<td>For &lt; 55 lbs dogs or ( &lt; 25 kg)</td>
										<td>90-95 gram(3.351 Oz)</td>
										<td>1</td>
										<td>95 gram (3.351 Oz)</td>
										<td>Horizontal</td>
										<td>Large</td>
									</tr>
									<tr>
										<td style="color: #fff; background: orange;">Royal Orange</td>
										<td>For 65 lbs dogs or (&lt; 30 kg</td>
										<td>150 gram(5.291 Oz)</td>
										<td>3</td>
										<td>150 gram (5.291 Oz)</td>
										<td>Horizontal</td>
										<td>Large</td>
									</tr>
									<tr>
										<td style="color: #fff; background: blue;">Royal Blue</td>
										<td>For &lt;70 lbs dogs or (&lt;35 kg)</td>
										<td>150-155 gram(5.467 Oz)</td>
										<td>1</td>
										<td>155 gram (5.467 Oz)</td>
										<td>Vertical</td>
										<td>X-large</td>
									</tr>
									<tr>
										<td style="color: #fff; background: red;">Royal Red</td>
										<td>For &gt;75lbs dogs or (&gt;35 kg</td>
										<td>175-180 gram(6.349 Oz)</td>
										<td>1</td>
										<td>180 gram (6.349 Oz)</td>
										<td>Vertical</td>
										<td>Jumbo</td>
									</tr>
									<tr>
										<td  style="color: #fff; background: brown;">Royal brown</td>
										<td>mixed for &gt; 180lbs and 65lbs</td>
										<td>330 gram(11.64 Oz)</td>
										<td>2</td>
										<td>330 gram (11.64 Oz)</td>
										<td>Vertical</td>
										<td>Jumbo+large dog</td>
									</tr>
									<tr>
										<td  style="color: #fff; background: #C1C128;">Powder</td>
										<td>RDC dog chew powder for cat and dog</td>
										<td>75 gram (2.6 Oz)</td>
										<td>&nbsp;</td>
										<td>5 -10gram in each dose (0.3527 Oz)</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td style="color: #fff; background: #AFAF48;">Royal golden Nuggets</td>
										<td>golden For small and medium dogs and cats</td>
										<td>0.5 kg (17.63 Oz) and 1 kg (35.27 Oz)</td>
										<td></td>
										<td>
											<ul>
												<li>Small (1-14lbs.) 4-6 nuggets</li>
												<li>Medium (15-44lbs.) 8-10 nuggets</li>
												<li>Large (45-84lbs.) 12-16 nuggets</li>
												<li>Giant (85+lbs.) 16-18 nuggets</li>
											</ul>
										</td>
										<td></td>
										<td></td>
									</tr>
								</table>
								<p>Note: 2-3 pieces of Royal Dog Chews during a one week period and after feeding always provide adequate fresh drinking water.</p><br>
								<br>
							</div>
						</div>
						<div id="tab2" class="tab-content" style="display: none;">
							<div class="cd-faq-items">
								<ul id="basics" class="cd-faq-group">
									<?php foreach ($faqs as $faq): ?>
										<li> 
											<a class="cd-faq-trigger" href="#0"><?= $faq->title ?></a>
											<div class="cd-faq-content">
												<?= $faq->description ?>
											</div>
											<!-- cd-faq-content -->
										</li>	
									<?php endforeach ?>
								</ul>
								<!-- cd-faq-group -->
								<ul id="mobile" class="cd-faq-group">
									<?php foreach ($faqs as $faq): ?>
										<li> 
											<a class="cd-faq-trigger" href="#0"><?= $faq->title ?></a>
											<div class="cd-faq-content">
												<?= $faq->description ?>
											</div>
											<!-- cd-faq-content -->
										</li>
									<?php endforeach ?>
								</ul>
								<!-- cd-faq-group -->
							<!-- cd-faq-group -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- product section end  -->
@endsection

@section('footer')
<!-- owl-carousel -->
<script src="<?= asset('js/owl-carousels.js') ?>"></script>
<script>
  	$(document).ready(function($) {
  		$('.tab-wrapper-section .tab-pannel-wrap .tabs li').on('click', function(){
		  $('.tab-wrapper-section .tab-pannel-wrap .tabs li.active').removeClass('active');
		  $(this).addClass('active');
		  var panelToShow = $(this).attr('rel');
		  $('.tab-wrapper-section .tab-pannel-wrap .tab-content.active').fadeOut(100, function(){
		      $(this).removeClass('active');
		      $('#'+panelToShow).fadeIn(200, function(){
		          $(this).addClass('active');
		      });
		  });
		});
		
    	$("#owl-examples").owlCarousel({
    		//Autoplay
    		autoPlay : false,
    	});
  	});

  	$("body").data("page", "frontpage");

</script>
@endsection