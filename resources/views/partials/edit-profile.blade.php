<section class="edit-profile-section">
    <strong>Edit Your Profile</strong>
    <div class="edit-form">
        <div class="container">
            <div class="row">  
                <div class="edit-form-wrapper">
                  	<form id="editProfile" action="<?= route('users.update', $user->username) ?>" method="post">
                  		{!! csrf_field() !!}
                  		<input type="hidden" name="_method" value="PUT">
                      	<div class="form-group col-xs-12 col-sm-6">
	                        <label for="exampleInputEmail1">Name</label>
	                        <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" value="<?= $user->name ?>" readonly="">
                      	</div>
                      	<div class="form-group col-xs-12 col-sm-6">
	                        <label for="email">Email</label>
	                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= $user->email ?>" readonly="">
                      	</div>
                      	<div class="form-group col-xs-12 col-sm-6">
	                        <label for="co-store">Co. Store</label>
	                        <input type="text" name="company_store_name" class="form-control" id="co-store" placeholder="Email" value="<?= $user->company_store_name ?>" readonly="">
                      	</div>
                      	<div class="form-group col-xs-12 col-sm-6">
	                        <label for="address">Address</label>
	                        <input type="text" name="street_address" class="form-control" id="address" placeholder="address" value="<?= $user->street_address ?>" readonly="">
                      	</div>
                      	<div class="form-group col-xs-12 col-sm-6">
	                        <label for="apt/ste">apt/ste</label>
	                        <input type="text" name="apt" class="form-control" id="apt/ste" placeholder="apt/ste  " value="<?= $user->apt ?>" readonly="">
                      	</div>
                       	<div class="form-group col-xs-12 col-sm-6">
                          	<label for="City">City</label>
                          	<input type="text" name="city" class="form-control" id="City" placeholder="# B Lynchburg, Virginia" value="<?= $user->city ?>" readonly="">
                      	</div>
                       	<div class="form-group col-xs-12 col-sm-6">
                          	<label for="State">State</label>
                          	<select name="state_id" class="form-control" id="sel1" readonly>
                              <?php foreach ($states as $state): ?>
                                <option value="<?= $state->id ?>" <?= $state->id == $user->state_id ? 'selected' : '' ?>>
                                  <?= $state->name ?>
                                </option>
                              <?php endforeach ?>
                          	</select>
                      	</div>
                       	<div class="form-group col-xs-12 col-sm-6">
                         	<label for="zip">Zip</label>
                          	<input type="text" name="zip" class="form-control" id="zip" placeholder="Zip" value=" Zip" readonly="">
                      	</div>
                      	<div class="form-group col-xs-12 col-sm-6">
                          	<label for="Phone">Phone</label>
                          	<input type="text" name="phone_number" class="form-control" id="Phone" placeholder="Phone" value="<?= $user->phone_number ?>" readonly="">
                      	</div>
                      	<div class="form-group col-xs-12 col-sm-6">
                          	<label for="fax">fax</label>
                          	<input type="text" name="fax_number" class="form-control" id="fax" placeholder="fax" value="<?= $user->fax_number ?>" readonly="">
                      	</div>
                      	<div class="form-group col-xs-12 col-sm-6">
                          	<label for="website">website</label>
                          	<input type="text" name="website" class="form-control" id="website " placeholder="website" value="<?= $user->website ?>" readonly="">
                      	</div>
                      	<div class="form-group col-xs-12 col-sm-6">
                          	<label for="tax">EIN (tax ID)</label>
                          	<input type="text" name="tax_id" class="form-control" id="tax" placeholder="tax" value="<?= $user->tax_id ?>" readonly="">
                      	</div>
                      	<!-- <div class="form-group col-xs-12 col-sm-6 password ">
                          	<label for="password">Old Password</label>
                          	<input type="password" name="old_password" class="form-control" id="old-password" placeholder="password" >
                      	</div>
                      	<div class="form-group col-xs-12 col-sm-6 password ">
                          	<label for="password"> New Password</label>
                          	<input type="password" name="password" class="form-control" id="password" placeholder="password" >
                      	</div>
                      	<div class="form-group col-xs-12 col-sm-6 password">
                          	<label for="old-password">Confirm Password</label>
                          	<input type="password" name="confirm_password" class="form-control" id="confirm-password" placeholder="password" >
                      	</div> -->
                      	<div class="form-group col-xs-6 col-sm-6 breaks-all">
                        	<div class="manage">
                          		<a href="<?= route('stores.index') ?>" title="">Manage Store</a>
                          		<a href="manage-retail.php" title="">Manage Retail Contact</a>
                        	</div>
                      	</div>
                      	<div class="form-group col-xs-6 col-sm-6 breaks-all">
	                        <div class="buttons">
	                            <button type="button" class="btn btn-primary btn-lg">Edit Your Profile</button>
	                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
	                        </div>
                      	</div>
                  	</form> 
                </div>
            </div> 
        </div>
    </div>
</section>