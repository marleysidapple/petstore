@extends('layouts.admin', ['pageBreadcrumb' => 'Change Password'])

@section('content')
<div class="post-page">
	<form class="form-horizontal" method="post" action="<?= route('change-password.post') ?>" enctype="multipart/form-data">
		{!! csrf_field() !!}
	  	<div class="form-group <?= $errors->has('current_password') ? 'has-error' : '' ?>">
		    <label for="title">Current Password</label>
		    <input type="text" class="form-control" id="current_password" name="current_password" >
		    <?php if ($errors->has('current_password')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('current_password') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>
	  	<div class="form-group <?= $errors->has('new_password') ? 'has-error' : '' ?>">
		    <label for="new_password">New Password</label>
		    <input type="text" class="form-control" name="new_password" />
		    <?php if ($errors->has('new_password')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('new_password') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>

	  	<div class="form-group <?= $errors->has('confirm_password') ? 'has-error' : '' ?>">
		    <label for="confirm_password">Confirm Password</label>
		    <input type="text" class="form-control" id="confirm_password" name="confirm_password" >
		    <?php if ($errors->has('confirm_password')) : ?>
                <span class="help-block">
                    <strong>{{ $errors->first('confirm_password') }}</strong>
                </span>
            <?php endif; ?>
	  	</div>
	  	<br />
	  	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection
