<?php

namespace App\Services;

use App\Interfaces\ShowAllInterface;
use App\Interfaces\UpdateInterface;

class StateService
{
	/**
	 * Injecting dependencies
	 * 
	 * @param ShowAllInterface $state
	 */
	function __construct(ShowAllInterface $state)
	{
		$this->state = $state;
	}

	public function allWithoutPagination(array $data = [])
	{
		return $this->state->allWithoutPagination($data);
	}
}