<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Royal Dogs Chew</title>
        <!-- Bootstrap core CSS -->
        <link href="<?= asset('css/bootstrap.css') ?>" rel="stylesheet">
        <!-- Bootstrap core CSS -->

        <!-- google font roboto start -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
         <!-- google font roboto end -->

         <!-- font-awesome css start -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
         <!-- font-awesome css end  -->
         
        <!-- style.css -->
        <link rel="stylesheet" type="text/css" href="<?= asset('css/style.css') ?>">
        <!-- style.css -->

        <!-- jquery bx slider -->
        <link rel="stylesheet" type="text/css" href="<?= asset('css/jquery.bxslider.css') ?>">
        <!-- jquery bx slider -->

        <!-- owl carousel -->
        <link rel="stylesheet" type="text/css" href="<?= asset('css/owl-carousel.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= asset('css/owl-theme.css') ?>">
        <!-- owl carousel -->
    </head>
    <body class="<?= $bodyClass ?>">
        @include('partials.main-navigation')
        
        <?php if (isset($headerImage) && $headerImage): ?>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?= isset($headerImageSource) ? $headerImageSource : asset('images/regular_page.jpg') ?>" alt="" class="img-responsive">
                    </div>
                </div>
                <!-- Controls -->
            </div>
        <?php endif ?>

        @yield('content')
        <footer>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-2 col-xs-3 sides-by-side ">
                        <ul class="bottom-navigation-panel">
                            <li><a href="{{url('about-us')}}">About Us </a></li>
                            <li><a href="{{url('faqs-list')}}">FAQ </a></li>
                            <li><a href="{{url('our-products')}}">Our Products </a></li>
                            <li><a href="{{url('stores-search')}}">Find Us </a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-xs-4 sides-by-side  ">
                        <ul class="bottom-navigation-panel">
                            <li><a href="{{url('product-analysis')}}">Product Analysis</a></li>
                            <li><a href="{{url('processing-collection')}}">Processing and Collection</a></li>
                            <li><a href="{{url('quality-assurance')}}">Quality Assurance</a></li>
                            <li><a href="{{url('gallery')}}">Photo Gallery</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-7 col-xs-5 breaks-all">
                        <div class="contact-section">
                            <p>
                                491 South Bethlehem Pike C#14 Tort Washington PA 19034 Phone: 267-255-0002    
                                <br>Email: info@royaldogchew.pet   Website: www.royaldogchew.peta
                            </p>    
                            <ul class="social-icons">
                                <li>
                                    <a href="https://www.facebook.com/HimalayanDogChew" target="blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>  
                                <li>
                                    <a href="https://twitter.com/chewhdc" target="blank">
                                        <i class="fa fa-tumblr"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/himalayan-dog-chew?trk=prof-exp-company-name" target="blank">
                                    <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>  
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="last-section">
                    <p>Copyright Royal Dog Chew | 2016 | All right reserved.</p>   
                    <p class="navbar-right">    Powered by: ad. Formation</p>
                </div> 
            </div>
        </footer>

        <!-- JavaScripts -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

        <script src="<?= asset('js/jquery-2.1.4.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.js') ?>"></script>

        <!-- bx slider js start -->
        <script src="<?= asset('js/jquery.bxslider.js') ?>"></script>
        <!-- bx slider js end  -->
        <script src="<?= asset('js/jquery.flexslider.js') ?>"></script>

        <script>
            // navigation menu
            $(document).on('click', ' header span', function () {
                $('body').addClass('menu-show');
            });

            $(document).on('click', ' .second-menu span', function () {
                $('body').removeClass('menu-show');
            });
            $(document).on('click', ' .second-menu ul li a', function () {
                $('body').removeClass('menu-show');
            });

            // header up and down
            $(window).bind('scroll', function(event) {
                var headerheight = $('').height();

                if ($(window).scrollTop() > 90) {
                    $('body').addClass('stickynav');
                } else {
                    $('body').removeClass('stickynav');
                }
            });

            $(document).on('click', '.second-menu ul li:first-child + li + li + li + li + li + li a', function () { 
                $('.second-menu').toggleClass('account-class');
            });
        </script>
        
        <script src="<?= asset('js/main.js') ?>"></script>
        @yield('footer')
        @yield('mainjs')
    </body>
</html>
