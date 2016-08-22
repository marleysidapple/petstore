<?php if(Auth::check()) : ?>
	@include('partials.backend-navigation')
	@include('partials.sign-out-menu')
<?php else : ?>
	@include('partials.navigation')
	@include('partials.second-menu')
    <!-- Controls -->
<?php endif; ?>