@extends('layouts.app', ['bodyClass' => 'home'])

@section('content')

<!-- slider with banner start -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?= asset('images/slider_new.jpg') ?>" alt="" class="img-responsive">
        </div>
         <div class="item ">
            <img src="<?= asset('images/slider_new2.jp') ?>g" alt="">
        </div>
         <div class="item ">
            <img src="<?= asset('images/slider_new3.jp') ?>g" alt="">
        </div>
    </div>
    <!-- Controls -->
    <div class="container">
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only"><img src="<?= asset('images/left-icon.png') ?>" alt=""></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only"><img src="<?= asset('images/right-icon.png') ?>" alt=""></span>
        </a>
    </div>  
</div>
<!-- slider with banner end  -->

<section class="bluebar">
    <div class="container">
        <h5>Our products might be interested you </h5>
        <div class="product-slide">
            <div id="owl-example" class="owl-carousel">
                <?php foreach ($products as $product): ?>
                    <div class="item">
                        <img src="<?= $product->featured_image ?>" alt="Touch">
                        <a href="<?= route('products.show', $product->slug) ?>" class="slider-caption">
                            <strong><?= $product->name ?></strong>
                            <p><?= substr($product->description, 0, 100) ?></p>
                        </a>
                    </div>    
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>

<section class="gallery-dogs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="slider-wraper  clearfix">
                    <div class="slider-container">
                        <div class="whole-slider-wraper">
                            <div>
                                <img src="<?= asset('images/rdc_1.jpg') ?>" alt="Img">
                            </div>
                            <div>
                                <img src="<?= asset('images/rdc_6.jpg') ?>" alt="Img">
                            </div>
                            <div>
                                <img src="<?= asset('images/rdc_5.jpg') ?>" alt="Img">
                            </div>
                            <div>
                                <img src="<?= asset('images/rdc_3.jpg') ?>" alt="Img">
                            </div>
                            <div>
                                <img src="<?= asset('images/rdc_4.jpg') ?>" alt="Img">
                            </div>
                        </div>
                    </div>
                    <div class="to-be-slide">
                        <ul class="clearfix">
                            <li>
                                <div class="img-wrap">
                                    <img src="<?= asset('images/rdc_1_58.jpg') ?>" alt="Img">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap">
                                    <img src="<?= asset('images/rdc_6_58.jpg') ?>" alt="Img">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap">
                                    <img src="<?= asset('images/rdc_5_58.jpg') ?>" alt="Img">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap">
                                    <img src="<?= asset('images/rdc_3_58.jpg') ?>" alt="Img">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap">
                                    <img src="<?= asset('images/rdc_4_58.jpg') ?>" alt="Img">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>  
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="dogscrew-content">
                    <h5 style="color:#822727;">Royal Dog Chew</h5>
                    <p>
                        The New <strong>Royal dog chew</strong> has arrived for your dog.100 % natural, <strong>authentic recipe</strong> and truly an <strong>artisan cheese</strong>. Royal Dog Chews are made from yak and local cow milk who depends on grasses, leaves, fodder and forage that grow in natural pasture and vegetation of higher altitude above <strong>15000 feet</strong> in the Himalayan region. 
                        Royal dog chew is created by the <strong>Himalayan artisan people</strong> using the centuries <strong>old traditional methods</strong>, utensils and tools. 
                        Dog chew is used as a dog treat. <strong>Himalayan –sourced</strong>. The best long lasting chews are healthy, grain and gluten – free and contain no artificial flavors, colors, preservatives and free of wheat, corn and soy. <strong>Jute stripes with smooth texture</strong> for a satisfying snack of dog .High protein and low in fat. Only three ingredient Milk, salt and lime juice <strong>"Fewer Ingredients, Better Taste And Flavors And Easy To Digest."</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>  

<section class="mission-sections" style="background:#f3f3f3;">
  <div class="container">
    <div class="row">
      <div class="join-us carrer" style="background:none" > <strong style="color:#00a59b;">History of Dog chew</strong>
        <div class="col-sm-12">
          <p style="text-align:center; padding-bottom:20px;"> The history behind the Nepalese dog chews began in 2003. A lady from USA (anonymous) came to Nepal for three years as a peace corps volunteers. While walking by a roadside she accidently offered a piece of Chhurpi to a puppy wandering around. To her surprise she found that the puppy ate the entire piece of Chhurpi. She was astonished with this finding that Chhurpi, commonly eaten by people of Nepal as a gum, can be a pet food. Later, she returned to USA with few samples of Chhurpi with her for testing it in lab as a potential pet food. The result was in favor and met requirements of pet foods especially for dogs. In this way an indigenous food of Himalayan Region called Chhurpi got introduced to American market. At present, Chhurpi demand seems to be growing as Dog Chews. We can find the same product "Chhurpi" on shelves of many supermarkets.  </p>
          
          <p><span class="origin"> ORIGIN OF ROYAL DOG CHEW: </span>Chauri (Yaks) and local cows rearing areas in high mountainous area and alpine regions of Nepal</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- video slider start -->
<section class="video-slider">
    <div class="container">
        <strong>Video story</strong>
            <div class="row"> 
                <div class="col-xs-12"> 
                    <ul class="bxslider">
                        <?php foreach ($playlistVideos as $videos): ?>
                            <?php foreach ($videos as $video): ?>
                                <li>
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?= $video->contentDetails->videoId ?>" frameborder="0" allowfullscreen></iframe>
                                </li>
                            <?php endforeach ?>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
    </div>
</section>
<!-- video slider end  -->

<!-- testimonal section start -->
<section class="testimonal">
   <div class="container">
        <h4>What others say about Royal Dog Chew?</h4>  
        <div class="row">
            <div class="first-section clearfix">
                <div class="col-sm-6 testimonal-content">
                    <div class="shape">
                        <img src="<?= asset('images/round-shape.png') ?>" alt="round">
                    </div>
                    <div>
                        <p>
                            We Call these 'crack bones', our dogs love them SO much! They last a really long time, and they never get sick from them like my dog sometimes does from other chews.
                        </p>
                        <ins>Martha M. Masters</ins>
                        <strong>Marketing - <a href="#">WikiTravel</a></strong>
                    </div>
                </div>
                <div class="col-sm-6 testimonal-content  last">
                    <div class="shape">
                        <img src="<?= asset('images/round-shape.png') ?>" alt="round">
                    </div>
                    <div>
                        <p>We call these 'crack bones', our dogs love them SO much! They last a really long time, and they never get sick from them like my dog sometimes does from other chews.
                        </p>
                        <ins>Anna Vandana</ins>
                        <strong>CEO -   <a href="#"> Media Wiki</a></strong>
                    </div>
                </div>
            </div>
            <div class="first-section clearfix">
                <div class="col-sm-6 testimonal-content">
                    <div class="shape">
                        <img src="<?= asset('images/round-shape.png') ?>" alt="round">
                    </div>
                    <div>
                        <p>
                            We call these 'crack bones', our dogs love them SO much! They last a really long time, and they never get sick from them like my dog sometimes does from other chews.
                        </p>
                        <ins>Maxi Milli</ins>
                        <strong>Public Relations  - <a href="#">Max Mobilcom</a></strong>
                    </div>
                </div>
                <div class="col-sm-6 testimonal-content last">
                    <div class="shape">
                        <img src="<?= asset('images/round-shape.png') ?>" alt="round">
                    </div>
                    <div>
                        <p>
                            We call these 'crack bones', our dogs love them SO much! They last a really long time, and they never get sick from them like my dog sometimes does from other chews.
                        </p>
                        <ins>Dr. Dosist</ins>
                        <strong>Dean of Medicine -  <a href="#"> Doom Inc</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonal section end  -->

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

<!-- instagram  -->
<section class="instagram">
    <div class="container">
        <h5>#Royal Dogs Chew</h5>
        <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/6681fc426c2fd2601b2823e2d723dda3c2cc695d.html" id="lightwidget_6681fc426c" name="lightwidget_6681fc426c"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
    </div>
</section>
<!-- instagram  -->

<!-- contact frm -->
<section class="contact-from">
    <div class="container">
        <div class="contact-wrap">
            <h2>CONTACT US</h2>
            <div class="row">
                <form action="<?= route('mail.contact') ?>" method="post">
                    {!! csrf_field() !!}
                  <div class="form-group col-sm-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                  </div>
                   <div class="form-group col-sm-6">
                    <label for="number">Number</label>
                    <input type="text" class="form-control" id="number" placeholder="Number" name="number">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="name_of_inquiry">Name Of Inquiry</label>
                    <input type="text" class="form-control" id="name_of_inquiry" name="name_of_inquiry" placeholder="Name Of Inquiry">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="description">Your Message</label>
                   <textarea name="description" id="description" placeholder="Your Message">
                   </textarea>
                  </div>
                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact frm -->

@endsection

@section('footer')
<script type="text/javascript" src="<?= asset('js/owl-carousel.js') ?>"></script>
<script type="text/javascript">
    // banner slide
    $(window).load(function() {
        $('.slider-banner .flexslider').flexslider({
            animation: "slide",
            'controlNav':false,
            slideshow: true
        });
    });

    // proudct slide
    $(window).load(function() {
        $('.product-slider .flexslider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 170,
            itemMargin: 18,
            controlNav: false,
            slideshow: true
        });
    });

    // video slide
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });

    // dogs gallery slide
    $(document).on('click', ' .to-be-slide li', function () {
        $('.slider-container ').removeClass('first') .removeClass('second')
        .removeClass('third').removeClass('fourth') .removeClass('fifth')
        .removeClass('six').removeClass('seven');
    });
    $(document).on('click', ' .to-be-slide li:first-child', function () {
        $('.slider-container ').addClass('first');
    });

    $(document).on('click', ' .to-be-slide li:first-child + li', function () {
        $('.slider-container ').addClass('second');
    });

    $(document).on('click', ' .to-be-slide li:first-child + li + li', function () {
        $('.slider-container ').addClass('third');
    });

    $(document).on('click', ' .to-be-slide li:first-child + li + li + li', function () {
        $('.slider-container ').addClass('fourth');
    });

    $(document).on('click', ' .to-be-slide li:first-child + li + li + li + li', function () {
        $('.slider-container ').addClass('fifth');
    });

    $(document).on('click', ' .to-be-slide li:first-child + li + li + li + li + li', function () {
        $('.slider-container ').addClass('six');
    });

    $(document).on('click', ' .to-be-slide li:first-child + li + li + li + li + li + li', function () {
        $('.slider-container ').addClass('seven');
    });

    // video slide
    // owl-carousel
    $(document).ready(function($) {
      $("#owl-example").owlCarousel();
    });

    $("body").data("page", "frontpage");
</script>
@endsection