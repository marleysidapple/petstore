<nav class="navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
       	<h1> <a class="navbar-brand" href="<?= url('/home') ?>">RDC Admin</a></h1>
	</div>
	<div class=" border-bottom">
    	<div class="full-left">
        	<section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>
			</section>
        	<div class="clearfix"> </div>
       	</div>
    	
    	<!-- Brand and toggle get grouped for better mobile display -->
 
   		<!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="drop-men" >
	        <ul class=" nav_1">
				<li class="dropdown">
	              	<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?= Auth::user()->username ?><i class="caret"></i></span><img height="60" width="60" src="<?= asset('assets/images/default-img.jpg') ?>"></a>
	              	<ul class="dropdown-menu " role="menu">
		                <li><a href="<?= route('change-password.get') ?>"><i class="fa fa-user"></i>Edit Profile</a></li>
		                <li><a href="<?= url('logout') ?>"><i class="fa fa-user"></i>Logout</a></li>
	              	</ul>
	            </li>
	        </ul>
	    </div><!-- /.navbar-collapse -->
		<div class="clearfix"></div>

		<div class="navbar-default sidebar" role="navigation">
	        <div class="sidebar-nav navbar-collapse">
	            <ul class="nav main-ul" id="side-menu">
	                <li class="main-li">
	                    <a href="<?= url('/home') ?>" class=" hvr-bounce-to-right">
	                    	<i class="fa fa-dashboard nav_icon "></i>
	                    	<span class="nav-label">Dashboard</span>
	                    </a>
	                </li>
	               
	                <li class="main-li">
	                    <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Product</span><span class="fa arrow"></span></a>
	                    <ul class="nav nav-second-level inner-ul">
	                        <li class="inner-li">
	                        	<a href="<?= route('products.index') ?>" class=" hvr-bounce-to-right">
	                        		<i class="fa fa-area-chart nav_icon"></i>All Products
	                        	</a>
	                        </li>
	                        <li class="inner-li">
	                        	<a href="<?= route('products.create') ?>" class=" hvr-bounce-to-right">
	                        		<i class="fa fa-area-chart nav_icon"></i>Add New
	                        	</a>
	                        </li>
					   </ul>
	                </li>

	                <li class="main-li">
	                    <a href="<?= route('orders.index') ?>" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Orders</span></a>
	                </li>

	                <li class="main-li">
	                    <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Testomonials</span><span class="fa arrow"></span></a>
	                    <ul class="nav nav-second-level inner-ul">
	                        <li class="inner-li">
	                        	<a href="<?= route('testomonials.index') ?>" class=" hvr-bounce-to-right">
	                        		<i class="fa fa-area-chart nav_icon"></i>All Testomonials
	                        	</a>
	                        </li>
	                        <li class="inner-li">
	                        	<a href="<?= route('testomonials.create') ?>" class=" hvr-bounce-to-right">
	                        		<i class="fa fa-area-chart nav_icon"></i>Add New
	                        	</a>
	                        </li>
					   </ul>
	                </li>

	                <li class="main-li">
	                    <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Faqs</span><span class="fa arrow"></span></a>
	                    <ul class="nav nav-second-level inner-ul">
	                        <li class="inner-li">
	                        	<a href="<?= route('faqs.index') ?>" class=" hvr-bounce-to-right">
	                        		<i class="fa fa-area-chart nav_icon"></i>All Faqs
	                        	</a>
	                        </li>
	                        <li class="inner-li">
	                        	<a href="<?= route('faqs.create') ?>" class=" hvr-bounce-to-right">
	                        		<i class="fa fa-area-chart nav_icon"></i>Add New
	                        	</a>
	                        </li>
					   </ul>
	                </li>

	                <li class="main-li">
	                    <a href="<?= route('users.index') ?>" class=" hvr-bounce-to-right">
	                    	<i class="fa fa-indent nav_icon"></i>
	                    	<span class="nav-label">Users</span>
	                    	<span class="fa arrow"></span>
	                    </a>
	                </li>

	                <li class="main-li">
	                    <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Settings</span></a>
	                </li>
	            </ul><!--side-bar-nav end-->
	        </div>
		</div>
	</div>
</nav>