<?php

namespace App\Interfaces;

interface CRUDInterface
{
	/**
	 * Get all model data
	 * @param  integer $limit limitation of no. of data to retrieve
	 * @return [type]
	 */
	public function all($limit, array $params = []);

	/**
	 * Get a single model data
	 * 
	 * @param  string $identifier
	 * @return [type]
	 */
	public function get($identifier, array $params = []);

	/**
	 * Save a model data
	 * 
	 * @param  array $data
	 * @return [type]
	 */
	public function save(array $data);

	/**
	 * Update a model data
	 * 
	 * @param  array $data
	 * @param  string $identifier
	 * @return [type]
	 */
	public function update($identifier, array $data);

	/**
	 * Delete a model data
	 * 
	 * @param  string $identifier
	 * @return [type]
	 */
	public function delete($identifier, array $params = []);
}