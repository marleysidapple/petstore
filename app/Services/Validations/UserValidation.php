<?php

namespace App\Services\Validations;

use App\Services\Validations\Validator;

class UserValidation extends Validator
{
	protected $rules = [
		'name' => 'required|string',
		'email' => 'required|email',
		'company_store_name' => 'required|string',
		'street_address' => 'required|string',
		'apt' => 'required|string',
		'city' => 'required|string',
		'state_id' => 'required|integer',
		'zip' => 'required|string',
		'phone_number' => 'required|string',
		'fax_number' => 'required|string',
		'website' => 'required|string',
		'tax_id' => 'required|string'
	];
}
