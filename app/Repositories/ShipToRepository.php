<?php

namespace App\Repositories;

use App\Interfaces\SaveInterface;
use App\ShipTo;

class ShipToRepository implements SaveInterface
{
	/**
	 * Injecting dependencies
	 * 
	 * @param ShipTo $shipTo
	 */
	function __construct(ShipTo $shipTo)
	{
		$this->shipTo = $shipTo;
	}

	public function all($limit, array $data = [])
	{
		return $this->shipTo->latest()->get();
	}

	public function save(array $data)
	{
		return $this->shipTo->create($data);
	}
}