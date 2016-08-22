<?php

namespace App\Services;

use App\Repositories\RetailerContactRepository;

class RetailerContactService
{
	function __construct(RetailerContactRepository $retailerContact)
	{
		$this->retailerContact = $retailerContact;
	}

	public function all($limit = 20, array $data = [])
	{
		return $this->retailerContact->all($limit, $data);
	}

	public function get($slug)
	{
		return $this->retailerContact->get($slug);
	}

	public function save($params)
	{
		$params['slug'] = rtrim(implode('-', explode(' ', strtolower($params['name']))), '.');
		return $this->retailerContact->save($params);
	}

	public function update($slug, $params)
	{
		$params['slug'] = rtrim(implode('-', explode(' ', strtolower($params['name']))), '.');
		return $this->retailerContact->update($slug, $params);
	}

	public function delete($slug)
	{
		return $this->retailerContact->delete($slug);
	}

	public function search($keyword)
	{
		return $this->retailerContact->search($keyword);
	}
}