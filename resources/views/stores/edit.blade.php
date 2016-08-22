@extends('layouts.app', ['bodyClass' => 'find-us'])

@section('content')

<!-- edit section start -->
<section class="join-us">
    <strong>ADD/MANAGE YOUR STORE(S)</strong>
    <div class="join-us-form">
        <div class="container">
            <div class="row"> 
                <div class="join-us-form-wrapper">
                    <form action="<?= route('stores.update', $store->slug) ?>" method="post">
                    	{!! csrf_field() !!}
                    	{{ method_field('PUT') }}
                        <div class="form-group col-lg-6 col-sm-6">
                            <input type="text" name="store_name" class="form-control" placeholder="Store Name" value="<?= (null !== old('store_name') ? old('store_name') : $store->store_name) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="store" class="form-control"  placeholder="Store" value="<?= (null !== old('store') ? old('store') : $store->store) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="suite" class="form-control"  placeholder="Suite" value="<?= (null !== old('suite') ? old('suite') : $store->suite) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="street_address" class="form-control"  placeholder="Street Address" value="<?= (null !== old('street_address') ? old('street)address') : $store->street_address) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="city" class="form-control"  placeholder="City" value="<?= (null !== old('city') ? old('city') : $store->city) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="phone_number" class="form-control"  placeholder="phone_number" value="<?= (null !== old('phone_number') ? old('phone_number') : $store->phone_number) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="private_phone_number" class="form-control"  placeholder="private_phone_number" value="<?= (null !== old('private_phone_number') ? old('private_phone_number') : $store->private_phone_number) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="email" class="form-control"  placeholder="Email" value="<?= (null !== old('email') ? old('email') : $store->email) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="fax_number" class="form-control"  placeholder="fax" value="<?= (null !== old('fax_number') ? old('fax_number') : $store->fax_number) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="zip" class="form-control"  placeholder="Zip" value="<?= (null !== old('zip') ? old('zip') : $store->zip) ?>">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<select name="state_id">
                          		<?php foreach ($states as $state): ?>
                          			<option value="<?= $state->id ?>" <?= (null !== old('state_id')) ? 'selected' : ($state->id == $store->state_id) ? 'selected' : '' ?>><?= $state->name ?></option>
                          		<?php endforeach ?>
                          	</select>
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="website" class="form-control"  placeholder="Website" value="<?= (null !== old('website') ? old('website') : $store->website) ?>">
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