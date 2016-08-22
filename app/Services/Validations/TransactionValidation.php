<?php

namespace App\Services\Validations;

use App\Services\Validations\Validator;

class TransactionValidation extends Validator
{
	/**
	 * @var array validation rules for registering user
	 */
	protected $rules = [
	  	'products.*.name' => 'required|string',
	  	'products.*.price' => 'required|numeric',
	  	'products.*.quantity' => 'integer',
	  	'total' => 'required|numeric',
	  	'currency' => 'required|string',
	  	'method' => 'required|string',
	  	'company_name' => 'required|string',
        'contact_address' => 'required|string',
        'phone_number' => 'required|string',
        'email' => 'required|email',
        'ein_sale_tax' => 'required|string',
        'fax_number' => 'required|string',
        'shipping_address' => 'required|string',
        'billing_address' => 'required|string',
        'zip' => 'required|string',
	];
}