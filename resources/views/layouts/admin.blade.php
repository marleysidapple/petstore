<!DOCTYPE HTML>
<html>
<head>
	<title>Wave</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<link href="<?= asset('css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="<?= asset('css/admin.css') ?>" rel='stylesheet' type='text/css' />
	<link href="<?= asset('css/font-awesome.css') ?>" rel="stylesheet">
	<link href="<?= asset('css/custom.css') ?>" rel="stylesheet">
	@yield('header')
</head>
<body>
	<div id="wrapper">
        @include('partials.admin-navigation')

        <div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
	  			<!--banner-->	
			    <div class="banner">
					<h2>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
						<span><?= $pageBreadcrumb ?></span>
					</h2>
			    </div>
				
				@if (Session::has('flash_message'))
		            <div class="post-page alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }}" style="margin-top: 4%">
		                @if(Session::has('flash_message_important'))
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                @endif
		                <p class="text-center">{{ session('flash_message') }}</p>
		            </div>
			    @endif

				<!--//banner-->
				<!--content-->
				@yield('content')

				<div class="copy">
		            <p> &copy; <?= date('Y') ?> Wave Admin. All Rights Reserved | Design by <a href="http://adfomration.com.np/" target="_blank">Adformation</a> </p>
			    </div>
			</div>
			<div class="clearfix"></div>
       	</div>
    </div>
	
	<script src="<?= asset('js/jquery-2.1.4.js') ?>"> </script>
	<!-- Mainly scripts -->
	<script src="<?= asset('js/jquery.metisMenu.js') ?>"></script>
	<script src="<?= asset('js/jquery.slimscroll.min.js') ?>"></script>
	<!-- Custom and plugin javascript -->
	<link href="<?= asset('css/custom.css') ?>" rel="stylesheet">
	<script src="<?= asset('js/custom.js') ?>"></script>
	<script src="<?= asset('js/screenfull.js') ?>"></script>
	<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
		});
	</script>

	<!--skycons-icons-->
	<script src="<?= asset('js/skycons.js') ?>"></script>
	<!--//skycons-icons-->
	<!--scrolling js-->
	<script src="<?= asset('js/jquery.nicescroll.js') ?>"></script>
	<script src="<?= asset('js/scripts.js') ?>"></script>
	<!--//scrolling js-->
	<script src="<?= asset('js/bootstrap.min.js') ?>"> </script>
	<script type="text/javascript">
		$('div.alert-danger').not('.alert-important').delay(10000).slideUp(4000);
		var rootUrl = window.location.origin  + '/';
	</script>
	@yield('footer')
</body>
</html>

