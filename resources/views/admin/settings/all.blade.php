@extends('layouts.admin', ['pageBreadcrumb' => 'Settings'])

@section('content')
<div class="post-page">
	<form method="post" action="<?= route('settings.store') ?>" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<?php foreach ($settings as $setting): ?>
			<div class="form-group <?= $errors->has($setting->key) ? 'has-error' : '' ?>">
			    <label for="<?= $setting->key ?>"><?= ucfirst(str_replace('_', ' ', $setting->key)) ?></label>
			    <input type="text" class="form-control" id="<?= $setting->key ?>" name="key[<?= $setting->key ?>]" value="<?= null !== old($setting->key) ? old($setting->key) : $setting->value ?>">
			    <?php if ($errors->has('key.'.$setting->key)) : ?>
	                <span class="help-block">
	                    <strong>{{ $setting->key }} field is required.</strong>
	                </span>
	            <?php endif; ?>
		  	</div>
		<?php endforeach ?>
		<br />
	  	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection