<?php

namespace App\Repositories;

use App\Interfaces\DeleteInterface;
use App\Interfaces\SaveInterface;
use App\Interfaces\ShowAllInterface;
use App\Interfaces\UpdateInterface;
use App\Store;

class StoreRepository implements ShowAllInterface
{
	/**
	 * Injecting dependencies
	 * 
	 * @param Store $store
	 */
	function __construct(Store $store)
	{
		$this->store = $store;
	}

	public function all($limit = 20, array $data = [])
	{
		return $this->store->paginate($limit);
	}

	public function get($slug)
	{
		return $this->findBySlug($slug);
	}

	public function save($params)
	{
		return $this->store->create($params);
	}

	public function update($slug, $params)
	{
		$store = $this->findBySlug($slug);
		return $store->update($params);
	}

	public function delete($slug)
	{
		$store = $this->findBySlug($slug);
		return $store->delete();
	}

	private function findBySlug($slug)
	{
		return $this->store->where('slug', $slug)->first();
	}

	public function search($keyword)
	{
		return $this->store->with('state')
			->whereHas('state', function($q) use ($keyword) {
				$q->where('name', 'like', '%'.$keyword['keyword'].'%');
			})
			->orWhere('store_name', 'like', '%'.$keyword['keyword'].'%')
			->orWhere('city', 'like', '%'.$keyword['keyword'].'%')
			->orWhere('street_address', 'like', '%'.$keyword['keyword'].'%')
			->latest()
			->paginate(2);
	}
}