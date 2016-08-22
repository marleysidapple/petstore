<?php

namespace App\Services\Validations;

use App\Services\Validations\Validator;

class RetailerContactValidation extends Validator
{
	protected $rules = [
		'name' => 'required|string',
		'designation' => 'required|string',
		'email' => 'required|email',
		'apt_ste' => 'required|string',
		'street_address' => 'required|string',
		'city' => 'required|string',
		'state_id' => 'required|integer',
		'zip' => 'required|string',
		'phone_number' => 'required|string',
		'fax_number' => 'required|string',
		'cc' => 'required'
	];
}