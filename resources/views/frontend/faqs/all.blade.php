@extends('layouts.app', ['bodyClass' => 'home', 'headerImage' => true])

@section('content')
<!-- carrer-us section start -->
<section class="join-us carrer">
	<strong>Frequently Asked Question</strong>
	<p>
		Thank you for your interest in a Frequently Asked Question with Royal Dogs Chew. We try to answer almost all your questions related with Royal Dog Chew.
	</p>
	<div class="join-us-form ">
		<div class="container">
			<div class="row">
				<section class="cd-faq">
					<div class="cd-faq-items">
						<ul id="basics" class="cd-faq-group">
							<?php foreach ($faqs as $faq): ?>
								<li>
									<a class="cd-faq-trigger" href="#0"><?= $faq->title ?></a>
									<div class="cd-faq-content">
										<?= $faq->description ?>
									</div> <!-- cd-faq-content -->
								</li>								
							<?php endforeach ?>
						</ul> <!-- cd-faq-group -->

						<ul id="mobile" class="cd-faq-group">
							<?php foreach ($faqs as $faq): ?>
								<li>
									<a class="cd-faq-trigger" href="#0"><?= $faq->title ?></a>
									<div class="cd-faq-content">
										<?= $faq->description ?>
									</div> <!-- cd-faq-content -->
								</li>								
							<?php endforeach ?>
						</ul> <!-- cd-faq-group -->

							<!-- cd-faq-group -->
					</div> <!-- cd-faq-items -->
					<a href="#0" class="cd-close-panel">Close</a>
				</section>
			</div>  
		</div>
	</div>
</section>

<section class="help-section">
    <h6>Need Help?</h6>
    <ul>
        <li>
            <a href="#">Find a Location  </a>|
        </li> 
        <li>
            <a href="#">product Guide</a>|
        </li> 
        <li>
            <a href="#">Gift Cards</a>|
        </li>  
        <li>
            <a href="#">offers</a>|
        </li>      
        <li>
            <a href="<?= url('login') ?>">become a reseller</a>
        </li> 
    </ul>
    <strong>
        <ins>OR</ins> 
        Call: +267-255-0002 
    </strong>
</section>
@endsection