@extends('layouts.app', ['bodyClass' => 'find-us'])

@section('content')

<!-- edit section start -->
<section class="join-us">
    <strong>ADD/MANAGE YOUR CONTACT(S)</strong>
    <div class="join-us-form">
        <div class="container">
            <div class="row"> 
                <div class="join-us-form-wrapper">
                    <form action="<?= route('retailer-contacts.update', $retailerContact->slug) ?>" method="post">
                    	{!! csrf_field() !!}
                    	{{ method_field('PUT') }}
                        <div class="form-group col-lg-6 col-sm-6">
                            <input type="text" name="name" class="form-control" placeholder="Store Name" value="<?= (null !== old('name') ? old('name') : $retailerContact->name) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="designation" class="form-control"  placeholder="designation" value="<?= (null !== old('designation') ? old('designation') : $retailerContact->designation) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="apt_ste" class="form-control"  placeholder="apt_ste" value="<?= (null !== old('apt_ste') ? old('apt_ste') : $retailerContact->apt_ste) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="street_address" class="form-control"  placeholder="Street Address" value="<?= (null !== old('street_address') ? old('street)address') : $retailerContact->street_address) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="city" class="form-control"  placeholder="City" value="<?= (null !== old('city') ? old('city') : $retailerContact->city) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="phone_number" class="form-control"  placeholder="phone_number" value="<?= (null !== old('phone_number') ? old('phone_number') : $retailerContact->phone_number) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="email" class="form-control"  placeholder="Email" value="<?= (null !== old('email') ? old('email') : $retailerContact->email) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="fax_number" class="form-control"  placeholder="fax" value="<?= (null !== old('fax_number') ? old('fax_number') : $retailerContact->fax_number) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="zip" class="form-control"  placeholder="Zip" value="<?= (null !== old('zip') ? old('zip') : $retailerContact->zip) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<select name="state_id">
                          		<?php foreach ($states as $state): ?>
                          			<option value="<?= $state->id ?>" <?= (null !== old('state_id')) ? 'selected' : ($state->id == $retailerContact->state_id) ? 'selected' : '' ?>><?= $state->name ?></option>
                          		<?php endforeach ?>
                          	</select>
                        </div>
                        <div class="form-group col-lg-12 col-sm-12">
                          	<input type="checkbox" id="c1" name="cc" <?= (null !== old('city')) ? 'checked' : ''; ?> />
                          	<label for="c1">I have read the Privacy Policy and Web Usage Agreement</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- edit section end  -->

@endsection