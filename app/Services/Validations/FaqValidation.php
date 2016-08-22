<?php

namespace App\Services\Validations;

use App\Services\Validations\Validator;

class FaqValidation extends Validator
{
	protected $rules = [
		'title' => 'required|string',
		'description' => 'required|string',
	];
}