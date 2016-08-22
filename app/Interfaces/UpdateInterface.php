<?php

namespace App\Interfaces;

interface UpdateInterface
{
	/**
	 * Update a model data
	 * 
	 * @param  array $data
	 * @param  string $identifier
	 * @return [type]
	 */
	public function update($identifier, array $data);
}