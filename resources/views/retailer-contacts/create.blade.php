@extends('layouts.app', ['bodyClass' => 'find-us'])

@section('content')
<!-- edit section start -->
<section class="join-us">
    <strong>ADD/MANAGE YOUR STORE(S)</strong>
    <div class="join-us-form">
        <div class="container">
            <div class="row"> 
                <div class="join-us-form-wrapper">
                    <form action="<?= route('retailer-contacts.store') ?>" method="post">
                    	{!! csrf_field() !!}
                        <div class="form-group col-lg-6 col-sm-6">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="designation" class="form-control"  placeholder="Title/Designation">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="apt_ste" class="form-control"  placeholder="APT/Suite">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="street_address" class="form-control"  placeholder="Street Address">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="city" class="form-control"  placeholder="City">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="phone_number" class="form-control"  placeholder="phone_number">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="email" class="form-control"  placeholder="Email">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="fax_number" class="form-control"  placeholder="fax">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<input type="text" name="zip" class="form-control"  placeholder="Zip">
                        </div>
                        <div class="form-group col-lg-6 col-sm-6">
                          	<select name="state_id">
                          		<?php foreach ($states as $state): ?>
                          			<option value="<?= $state->id ?>"><?= $state->name ?></option>
                          		<?php endforeach ?>
                          	</select>
                        </div>
                        <div class="form-group col-lg-12 col-sm-12">
                          	<input type="checkbox" id="c1" name="cc" />
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