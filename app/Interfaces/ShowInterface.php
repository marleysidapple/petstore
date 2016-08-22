<?php

namespace App\Interfaces;

interface ShowInterface
{
	/**
	 * Get single item
	 * 
	 * @param  string|integer 	$id
	 * @param  array  			$data
	 */
	public function get($id, array $data = []);
}