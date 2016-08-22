@extends('layouts.admin', ['pageBreadcrumb' => 'Products'])

@section('header')
<link rel="stylesheet" type="text/css" href="<?= asset('js/jquery-ui/jquery-ui.css') ?>">
@endsection

@section('content')
<div class="post-page">
	<form method="post" action="<?= route('testomonials.store') ?>" enctype="multipart/form-data">
		{!! csrf_field() !!}
	  	<div class="form-group <?= $errors->has('title') ? 'has-error' : '' ?>">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" placeholder="Title" name="title"
		    	value="<?= null !== old('title') ? old('title') : '' ?>">
		    <?php if ($errors->has('title')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>
	  	<div class="form-group <?= $errors->has('description') ? 'has-error' : '' ?>">
		    <label for="description">Description</label>
		    <textarea id="post-editor" class="post-editor form-control" name="description" rows="10"><?= null !== old('description') ? old('description') : '' ?></textarea>
		    <?php if ($errors->has('description')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>
	
		<div class="form-group <?= $errors->has('name') ? 'has-error' : '' ?>">
		    <label for="upc">Name</label>
		    <input type="text" class="form-control" id="upc" placeholder="Name" name="name"
		    	value="<?= null !== old('name') ? old('name') : '' ?>">
		    <?php if ($errors->has('name')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('image') ? 'has-error' : '' ?>">
		    <label for="image">Image</label>
		    <input type="file" class="form-control" name="image" id="image">
		    <?php if ($errors->has('image')): ?>
		    	<span class="help-block">
                    <p>{{ $errors->first('image') }}</p>
                </span>
		    <?php endif ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('designation') ? 'has-error' : '' ?>">
		    <label for="upc">Designation</label>
		    <input type="text" class="form-control" id="upc" placeholder="Name" name="designation"
		    	value="<?= null !== old('designation') ? old('designation') : '' ?>">
		    <?php if ($errors->has('designation')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('designation') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('company') ? 'has-error' : '' ?>">
		    <label for="company">Company</label>
		    <input type="text" class="form-control" id="company" placeholder="Regular Price" name="company"
		    	value="<?= null !== old('company') ? old('company') : '' ?>">
		    <?php if ($errors->has('company')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('company') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('company_website') ? 'has-error' : '' ?>">
		    <label for="company_website">Company Website</label>
		    <input type="text" class="form-control" id="company_website" placeholder="Discount Price" name="company_website"
		    	value="<?= null !== old('company_website') ? old('company_website') : '' ?>">
		    <?php if ($errors->has('company_website')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('company_website') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('published_at') ? 'has-error' : '' ?>">
		    <label for="published_at">Published Date</label>
		    <input type="text" class="datepicker form-control" name="published_at">
		    <?php if ($errors->has('published_at')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('published_at') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>
	  	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection

@section('footer')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="<?= asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js') ?>"></script>
<script type="text/javascript" src="<?= asset('js/jquery-ui/jquery-ui.js'); ?>"></script>
<script type="text/javascript">
	$(".datepicker").datepicker();
	// $('.post-editor').ckeditor();
</script>
@endsection