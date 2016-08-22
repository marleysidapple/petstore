<?php

namespace App\Services\Validations;

use Validator as V;

abstract class Validator
{
	/**
	 * @var array  validation rules for registering user
	 */
	protected $rules = [];
	
	/**
	 * @var string $errors Stores error string
	 */
	protected $errors = [];

	/**
	 * Checks if data are valid or not.
	 * @param  array   $attributes All input data
	 * @param  array   $rules      Valdation rules
	 * @return boolean
	 */
	public function isValid(array $attributes)
	{
		$v = V::make($attributes, $this->rules);

		if($v->fails()) {
			foreach ($v->errors()->getMessages() as $key => $error) {
				$this->errors[$key] = $error[0];
			}
			
			return false;
		}
		
		return true;
	}

	/**
	 * Returns the error messages stored in errors variable
	 * @return array
	 */
	public function getErrors()
	{
		return $this->errors;
	}

	public function overrideDefaultRules(array $newRules)
	{
		$this->rules = $newRules;
		return $this;
	}

	public function mergeWithExistingRules($key, $rule)
	{
		if(array_key_exists($key, $this->rules)) {
			unset($this->rules[$key]);
		}

		$this->rules = array_merge($this->rules, [$key => $rule]);
		return $this;
	}
}