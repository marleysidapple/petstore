<header>
    <div class="container clearfix">
        <div class="logo-wrap">
            <a href="<?= url('/') ?>">
                <img src="<?= asset('images/__logo.png') ?>" alt="logo" class="second-logo">Royal Dogs Chew
            </a>
        </div>
        <div class="menu-wrap hidden-xs">
            <ul class="backend-menu">
                <li><a href="<?= url('home') ?>">Home</a></li>
                <li><a href="<?= url('pricing') ?>" class="price">Pricing</a></li>
                <li><a href="<?= route('stores-search') ?>" class="price">Find Us</a></li>
                <li><a href="<?= url('order') ?>" class="price">Place Order</a></li> 
                <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                	<ul class="dropdown-menu">
                        <li><a href="<?= url('/home') ?>">Edit Profile</a></li>
                        <li><a href="<?= url('forms') ?>">forms</a></li>
                        <li><a href="<?= url('shipping') ?>">Shipping & Garauntee</a></li>
                        <li><a href="<?= route('stores.index') ?>">Manage Store</a></li>
                        <li><a href="<?= route('retailer-contacts.index') ?>">Manage Retailer Contact</a></li>
                    </ul>
                </li>
                <li><a href="<?= url('/logout') ?>">Sign Out</a></li>
            </ul>
        </div>
        <span class="fa fa-bars fa-2x visible-xs"></span>
    </div>
</header> 