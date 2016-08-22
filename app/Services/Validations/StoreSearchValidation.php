<?php

namespace App\Services\Validations;

use App\Services\Validations\Validator;

class StoreSearchValidation extends Validator
{
	protected $rules = [
		'keyword' => 'required|string'
	];
}
