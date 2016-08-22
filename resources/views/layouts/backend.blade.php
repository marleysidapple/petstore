<!DOCTYPE html>
<html lang="en">
<!-- style.css -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Royal  Dogs Chew</title>
	<link rel="shortcut icon" type="image/android-icon-36x36.png" href="image/android-icon-36x36.png"/>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Bootstrap core CSS -->

	<!-- google font roboto start -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	 <!-- google font roboto end -->

	 <!-- font-awesome css start -->
	 <link rel="stylesheet" 
	 href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	 <!-- font-awesome css end  -->
	 
	<!-- style.css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- style.css -->
	@yield('header')
</head>
<!-- style.css -->
<link rel="stylesheet" type="text/css" href=" css/table.css">
<body class="<?= $bodyClass ?>">

	<!-- header start  -->
	<header>
	    <div class="container clearfix">
	        <div class="logo-wrap">
	             <a href="index.php"><img src="image/logo.png" class="second-logo"  alt="df">Royal Dogs Chew</a>  
	        </div>
	        <div class="menu-wrap hidden-xs">
	            <ul>
	                <li><a href="index.php">Home</a></li>
	                <li><a href="pricing.php" class="price">Pricing</a></li>
	                <li><a href="find-us.php" class="price">Find Us</a></li>
	                <li><a href="order.php" class="price">Place Order</a></li> 
	                <li class="dropdown">
	                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
	                      <ul class="dropdown-menu">
	                            <li><a href="account.php">Edit Profile</a></li>
	                            <li><a href="forms.php">forms</a></li>
	                            <li><a href="shipping.php">Shipping & Garauntee</a></li>
	                            <li><a href="manage-store.php">Manage Store</a></li>
	                            <li><a href="manage-retail.php">Manage Retailer Contact</a></li>
	                            
	                      </ul>
	                </li>
	               
	                <li><a href="index.php">Sign Out</a></li>
	            </ul>
	        </div>
	        <span class="fa fa-bars fa-2x visible-xs"></span>
	    </div>
	</header> 
	<!-- header end -->

	<!-- second menu  -->
	<section class="second-menu">
	  <ul class="first">
	    <li><a href="index.php">Home</a></li>
	    <li><a href="pricing.php">Pricing</a></li>
	    <li><a href="find-us.php">Find US</a></li>
	    <li><a href="order.php">Place Order</a></li> 
	     <li><a href="#">Account <span class="caret"></span></a>
	       <ul class="account-menu">
	         <li><a href="account.php">Edit Profile</a></li>
	          <li><a href="forms.php">forms</a></li>
	          <li><a href="shipping.php">Shipping & Garauntee</a></li>
	          <li><a href="manage-store.php">Manage Store</a></li>
	          <li><a href="manage-retail.php">Manage Retailer Contact</a></li>
	        </ul> 
	    </li>   
	    <li><a href="index.php">Sign Out</a></li>
	  </ul>
		<span class="fa fa-3x fa-close"></span>
	</section>
	<!-- second menu  --> 

	@yield('content')

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

	<!--- footer section start -->
	<footer>
	    <div class="container clearfix">
	        <div class="row">
	            <div class="col-sm-2 col-xs-3 sides-by-side ">
	                <ul class="bottom-navigation-panel">
	                    <li><a href="about.php">About Us </a></li>
	                    <li><a href="#">FAQ </a></li>
	                    <li><a href="career.php">Career </a></li>
	                    <li><a href="find-us.php">Find Us </a></li>
	                </ul>
	            </div>
	            <div class="col-sm-3 col-xs-4 sides-by-side  ">
	                <ul class="bottom-navigation-panel">
	                    <li><a href="ourproducts.php">Royal Dog Chew</a></li>
	                    <li><a href="ourproducts.php">yakySNACKS </a></li>
	                    <li><a href="ourproducts.php">Ruff Roots </a></li>
	                    <li><a href="ourproducts.php">leanlix </a></li>
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
	<!--- footer section end  -->

	<!-- script js -->
	<script src="js/jquery-2.1.4.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- bx slider js start -->
	<script src="js/jquery.bxslider.js"></script>
	<!-- bx slider js end  -->
	<script src="js/owl-carousel.js"></script>

	<script>
	$(document).on('click', ' header .fa-bars', function () {
	    $('body').addClass('menu-show');
	});

	$(document).on('click', ' .second-menu .fa-close', function () {
	    $('body').removeClass('menu-show');
	});

	$(window).bind('scroll', function(event) {
	  var headerheight = $('').height();
	  if ($(window).scrollTop() > 49) {
	  $('body').addClass('stickynav');
	  }
	  else {
	  $('body').removeClass('stickynav');
	  }
	});
	<!-- header up and down -->

	$(document).on('click', '.second-menu ul li:first-child + li + li + li + li  a', function () { 
	    $('.second-menu').toggleClass('account-class');
	});

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


	// tab panel //
	$(document).on('click', ' .thumb-pic li', function () {
	  var scope = $(this);
	      imageSrc = scope.children('img').attr('src');

	    $('#main-image img').data('zoom-image', imageSrc);
	    $('#main-image img').attr('src', imageSrc);
	    
	});
	</script>

	@yield('footer')

	<!-- script js -->
</body>
</html>