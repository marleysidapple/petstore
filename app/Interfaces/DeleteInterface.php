<?php

namespace App\Interfaces;

interface DeleteInterface
{
	/**
	 * Delete an item
	 * 
	 * @param  string|integer 	$id
	 * @param  array  			$data
	 */
	public function delete($id, array $data = []);
}