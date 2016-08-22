<?php

namespace App\Services\Validations;

use App\Services\Validations\Validator;

class SettingValidation extends Validator
{
	protected $rules = [
		'key.*' => 'required|string'
	];
}