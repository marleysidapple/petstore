<?php

namespace App\Repositories;

use App\Faq;

class FaqRepository
{
	/**
	 * Injecting dependencies
	 * 
	 * @param Faq $faq
	 */
	function __construct(Faq $faq)
	{
		$this->faq = $faq;
	}

	public function all($limit, array $data = [])
	{
		return $this->faq->latest()->paginate($limit);
	}

	public function allWithoutPagination(array $data = [])
	{
		return $this->faq->latest()->get();
	}

	public function save(array $data)
	{
		$data['slug'] = rtrim(implode('-', explode(' ', str_replace('?', '', strtolower($data['title'])))), '.');
		return $this->faq->create($data);
	}

	public function findBySlug($slug)
	{
		return $this->faq->where('slug', $slug)->first();
	}

	public function update($slug, array $data)
	{
		$faq = $this->findBySlug($slug);
		$data['slug'] = rtrim(implode('-', explode(' ', str_replace('?', '', strtolower($data['title'])))), '.');
		$faq->update($data);
		return $this->findBySlug($data['slug']);
	}

	public function delete($slug)
	{
		$faq = $this->findBySlug($slug);
		$faq->delete();
		return $faq;
	}
}
