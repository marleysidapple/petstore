@extends('layouts.admin', ['pageBreadcrumb' => 'FAQs'])

@section('content')
<div class="post-page">
	<form method="post" action="<?= route('faqs.store') ?>" enctype="multipart/form-data">
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
	  	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection

@section('footer')
<script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="<?= asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js') ?>"></script>
<script type="text/javascript">
	$('.post-editor').ckeditor();
</script>
@endsection