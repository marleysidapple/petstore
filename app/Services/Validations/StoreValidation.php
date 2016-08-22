<?php

namespace App\Services\Validations;

use App\Services\Validations\Validator;

class StoreValidation extends Validator
{
	protected $rules = [
		'store_name' => 'required|string',
		'store' => 'required|string',
		'suite' => 'required|string',
		'email' => 'required|email',
		'street_address' => 'required|string',
		'city' => 'required|string',
		'state_id' => 'required|integer',
		'zip' => 'required|string',
		'phone_number' => 'required|string',
		'private_phone_number' => 'required|string',
		'fax_number' => 'required|string',
		'website' => 'required|string',
		'cc' => 'required'
	];
}
