<?php

namespace App\Repositories;

use App\Interfaces\DeleteInterface;
use App\Interfaces\SaveInterface;
use App\Interfaces\ShowAllInterface;
use App\Interfaces\UpdateInterface;
use App\RetailerContact;

class RetailerContactRepository implements ShowAllInterface, SaveInterface, UpdateInterface, DeleteInterface
{
	function __construct(RetailerContact $retailerContact)
	{
		$this->retailerContact = $retailerContact;
	}

	public function all($limit, array $data = [])
	{
		return $this->retailerContact->with('state')->paginate($limit);
	}

	public function get($slug)
	{
		return $this->findBySlug($slug);
	}

	public function save(array $params)
	{
		return $this->retailerContact->create($params);
	}

	public function update($slug, array $params)
	{
		$retailerContact = $this->findBySlug($slug);
		$retailerContact->update($params);
		return $retailerContact;
	}

	public function delete($slug, array $data = [])
	{
		$retailerContact = $this->findBySlug($slug);
		return $retailerContact->delete();
	}

	private function findBySlug($slug)
	{
		return $this->retailerContact->where('slug', $slug)->first();
	}
}