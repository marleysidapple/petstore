<?php

namespace App\Interfaces;

interface SaveInterface
{
	/**
	 * Save a model data
	 * 
	 * @param  array $data
	 * @return [type]
	 */
	public function save(array $data);
}