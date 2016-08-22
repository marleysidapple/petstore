<?php

namespace App\Repositories;

use App\Interfaces\ShowAllInterface;
use App\State;

class StateRepository implements ShowAllInterface
{
	/**
	 * Injecting dependencies
	 * 
	 * @param State $state
	 */
	function __construct(State $state)
	{
		$this->state = $state;
	}

	public function all($limit, array $data = [])
	{
		return $this->state->paginate($limit);
	}

	public function allWithoutPagination(array $data = [])
	{
		return $this->state->all();
	}
}