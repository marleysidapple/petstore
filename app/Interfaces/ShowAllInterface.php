<?php

namespace App\Interfaces;

interface ShowAllInterface
{
	/**
	 * Get all data of a specific resource
	 * 
	 * @param  integer $limit
	 * @param  array  $data
	 */
	public function all($limit, array $data = []);
}