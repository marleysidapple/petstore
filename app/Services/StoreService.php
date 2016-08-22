<?php

namespace App\Services;

use App\Repositories\StoreRepository;

class StoreService
{
	function __construct(StoreRepository $store)
	{
		$this->store = $store;
	}

	public function all($limit = 20, array $data = [])
	{
		return $this->store->all($limit, $data);
	}

	public function get($slug)
	{
		return $this->store->get($slug);
	}

	public function save($params)
	{
		$params['slug'] = rtrim(implode('-', explode(' ', strtolower($params['store_name']))), '.');
		return $this->store->save($params);
	}

	public function update($slug, $params)
	{
		$params['slug'] = rtrim(implode('-', explode(' ', strtolower($params['store_name']))), '.');
		return $this->store->update($slug, $params);
	}

	public function delete($slug)
	{
		return $this->store->delete($slug);
	}

	public function search($keyword)
	{
		return $this->store->search($keyword);
	}
}