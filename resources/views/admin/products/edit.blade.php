@extends('layouts.admin', ['pageBreadcrumb' => 'Products'])

@section('header')
<link rel="stylesheet" type="text/css" href="<?= asset('js/jquery-ui/jquery-ui.css') ?>">
@endsection

@section('content')
<div class="post-page">
	<form method="post" action="<?= route('products.update', $product->slug) ?>" enctype="multipart/form-data">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
	  	<div class="form-group <?= $errors->has('name') ? 'has-error' : '' ?>">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" placeholder="Title" name="name"
		    	value="<?= null !== old('name') ? old('name') : $product->name ?>">
		    <?php if ($errors->has('name')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>
	  	<div class="form-group <?= $errors->has('description') ? 'has-error' : '' ?>">
		    <label for="description">Description</label>
		    <textarea id="post-editor" class="post-editor form-control" name="description" rows="10"><?= null !== old('description') ? old('description') : $product->description ?></textarea>
		    <?php if ($errors->has('description')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('ingredients') ? 'has-error' : '' ?>">
		    <label for="upc">Ingredients</label>
		    <input type="text" class="form-control" id="upc" placeholder="Ingredients" name="ingredients"
		    	value="<?= null !== old('ingredients') ? old('ingredients') : $product->ingredients ?>">
		    <?php if ($errors->has('ingredients')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('ingredients') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('guaranteed_analysis') ? 'has-error' : '' ?>">
		    <label for="upc">Guaranteed Analysis</label>
		    <input type="text" class="form-control" id="upc" placeholder="Guaranteed Analysis" name="guaranteed_analysis"
		    	value="<?= null !== old('guaranteed_analysis') ? old('guaranteed_analysis') : $product->guaranteed_analysis ?>">
		    <?php if ($errors->has('guaranteed_analysis')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('guaranteed_analysis') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>
	
		<div class="form-group <?= $errors->has('universal_product_code') ? 'has-error' : '' ?>">
		    <label for="upc">Universal Product Code</label>
		    <input type="text" class="form-control" id="upc" placeholder="Universal Product Code" name="universal_product_code"
		    	value="<?= null !== old('universal_product_code') ? old('universal_product_code') : $product->universal_product_code ?>">
		    <?php if ($errors->has('universal_product_code')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('universal_product_code') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('quantity') ? 'has-error' : '' ?>">
		    <label for="quantity">Quantity</label>
		    <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity"
		    	value="<?= null !== old('quantity') ? old('quantity') : $product->quantity ?>">
		    <?php if ($errors->has('quantity')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('quantity') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('regular_price') ? 'has-error' : '' ?>">
		    <label for="regular_price">Regular Price</label>
		    <input type="text" class="form-control" id="regular_price" placeholder="Regular Price" name="regular_price"
		    	value="<?= null !== old('regular_price') ? old('regular_price') : $product->regular_price ?>">
		    <?php if ($errors->has('regular_price')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('regular_price') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('discount_price') ? 'has-error' : '' ?>">
		    <label for="discount_price">Discount Price</label>
		    <input type="text" class="form-control" id="discount_price" placeholder="Discount Price" name="discount_price"
		    	value="<?= null !== old('discount_price') ? old('discount_price') : $product->discount_price ?>">
		    <?php if ($errors->has('discount_price')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('discount_price') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('currency') ? 'has-error' : '' ?>">
	  		<label for="currency">Currency</label>
			<select class="form-control" id="currency" name="currency">
				<option value="USD">USD</option>
			</select>
			<?php if ($errors->has('currency')): ?>
		    	<span class="help-block">
                    <p>{{ $errors->first('currency') }}</p>
                </span>
		    <?php endif ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('featured_image') ? 'has-error' : '' ?>">
		    <label for="featured_image">Featured Image</label>
		    <input type="file" class="form-control" name="featured_image" id="featured_image">
		    <?php if ($errors->has('featured_image')): ?>
		    	<span class="help-block">
                    <p>{{ $errors->first('featured_image') }}</p>
                </span>
		    <?php endif ?>
	  	</div>
	  	<div class="form-group <?= $errors->has('gallery') ? 'has-error' : '' ?>">
		    <label for="gallery">Gallery</label>
		    <input type="file" class="form-control" name="gallery[]" id="gallery" multiple>
		    	<span class="help-block">
                    <p>{{ $errors->first('gallery') }}</p>
                </span>
		    <?php //endif ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('common_dog_breeds') ? 'has-error' : '' ?>">
		    <label for="common_dog_breeds">Common Dog Breeds</label>
		    <textarea id="post-editor" class="post-editor form-control" name="common_dog_breeds" rows="10"><?= null !== old('common_dog_breeds') ? old('common_dog_breeds') : $product->common_dog_breeds ?></textarea>
		    <?php if ($errors->has('common_dog_breeds')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('common_dog_breeds') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>
	
		<div class="form-group <?= $errors->has('video') ? 'has-error' : '' ?>">
		    <label for="video">Youtube Link</label>
		    <input type="text" class="form-control" id="video" placeholder="Youtube Link" name="video"
		    	value="<?= null !== old('video') ? old('video') : $product->video ?>">
		    <?php if ($errors->has('video')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('video') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('published_at') ? 'has-error' : '' ?>">
		    <label for="published_at">Published Date</label>
		    <input type="text" class="datepicker form-control" name="published_at" value="<?= $product->published_at->format('m/d/Y') ?>">
		    <?php if ($errors->has('published_at')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('published_at') }}</strong>
                </span>	
            <?php endif; ?>
	  	</div>
	  	<div class="checkbox">
		    <label>
		      	<input type="checkbox" id="trending" name="activated_discount" <?= 1 == $product->is_discount_active ? 'checked' : '' ?>>Activate Discount
		    </label>
	  	</div>
	  	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection

@section('footer')
<script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="<?= asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/jquery-ui/jquery-ui.js'); ?>"></script>
<script type="text/javascript">
	$(".datepicker").datepicker();
	$('.post-editor').ckeditor();
</script>
@endsection