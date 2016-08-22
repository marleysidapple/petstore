<header>
    <div class="container clearfix">
        <div class="logo-wrap">
            <a href="<?= url('/') ?>">
                <img src="<?= asset('images/logo.png') ?>" alt="logo">
            </a>
        </div>
        <div class="menu-wrap hidden-xs">
            <ul>
                <li><a href="<?= url('/') ?>">Home</a></li>
                <li><a href="<?= url('about-us') ?>">About Us</a></li>
                <li><a href="<?= url('our-products') ?>" class="price">Our Products</a></li>
                <li><a href="<?= url('quality-assurance') ?>" class="price">Quality Assurance</a></li>
                <li><a href="<?= url('faqs-list') ?>">FAQ's</a></li>
                <li><a href="<?= route('stores-search') ?>">Find US</a></li>
                <li><a href="<?= url('contact-us') ?>">Contact Us</a></li>
                <li><a href="<?= url('login') ?>">Retailed Sign In</a></li>
            </ul>
        </div>
        <span class="fa fa-bars fa-2x visible-xs"></span>
    </div>
</header>