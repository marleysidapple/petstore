<?php

namespace App\Services\Validations;

use App\Services\Validations\Validator;

class TestomonialValidation extends Validator
{
	protected $rules = [
		'name' => 'required|string',
		'title' => 'required|string',
		'description' => 'required|string',
		'company' => 'required|string',
		'company_website' => 'required|string',
		'image' => 'required|image',
		'designation' => 'required|string'
	];
}