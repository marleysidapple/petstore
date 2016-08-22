<?php

namespace App\Services\Validations;

use App\Services\Validations\Validator;

class ProductValidation extends Validator
{
	protected $rules = [
		'name' => 'required|string',
		'universal_product_code' => 'required|string',
		'ingredients' => 'required|string',
		'guaranteed_analysis' => 'required|string',
		'regular_price' => 'required|numeric',
		'discount_price' => 'required|numeric',
		'currency' => 'required|string',
		'is_discount_active' => 'string',
		'video' => 'string',
		'common_dog_breeds' => 'required|string',
	];
}