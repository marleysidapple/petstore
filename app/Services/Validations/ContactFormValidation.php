<?php

namespace App\Services\Validations;

use App\Services\Validations\Validator;

class ContactFormValidation extends Validator
{
	protected $rules = [
		'name' => 'required|string',
		'name_of_inquiry' => 'required|string',
		'email' => 'required|email',
		'number' => 'required|numeric',
		'description' => 'required|string',
	];
}
