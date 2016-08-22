<?php

namespace App\Repositories;

use App\Interfaces\DeleteInterface;
use App\Interfaces\SaveInterface;
use App\Interfaces\ShowAllInterface;
use App\Interfaces\UpdateInterface;
use App\Testomonial;

class TestomonialRepository implements SaveInterface, UpdateInterface, ShowAllInterface, DeleteInterface
{
	/**
	 * Injecting dependencies
	 * 
	 * @param Testomonial $testomonial
	 */
	function __construct(Testomonial $testomonial)
	{		
		$this->testomonial = $testomonial;
	}

	public function all($limit, array $data = [])
	{
		return $this->testomonial->latest()->paginate($limit);
	}

	public function get($slug)
	{
		return $this->findBySlug($slug);
	}

	private function findBySlug($slug)
	{
		return $this->testomonial->where('slug', $slug)->first();
	}

	public function save(array $data)
	{
		return $this->testomonial->create($data);
	}

	public function update($slug, array $data)
	{
		$testomonial = $this->findBySlug($slug);
		$testomonial->update($data);
		return $this->findBySlug($slug);
	}

	public function delete($slug, array $data = [])
	{
		$this->findBySlug($slug)->delete();
	}
}