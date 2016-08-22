<?php

namespace App\Repositories;

use App\Interfaces\SaveInterface;
use App\Product;

class ProductRepository implements SaveInterface
{
	/**
	 * Injecting dependencies
	 * 
	 * @param Product $product
	 */
	function __construct(Product $product)
	{
		$this->product = $product;
	}

	public function all($limit, array $data = [])
	{
		return $this->product->with('productGallery')->latest()->paginate($limit);
	}

	public function allWithoutPagination(array $data = [])
	{
		return $this->product->with('productGallery')->latest()->get();
	}

	public function save(array $data)
	{
		return $this->product->create($data);
	}

	public function findBySlug($slug)
	{
		return $this->product->with('productGallery')->where('slug', $slug)->first();
	}

	public function update($slug, array $data)
	{
		$product = $this->findBySlug($slug);
		$product->update($data);
		return $this->findBySlug($data['slug']);
	}

	public function delete($slug)
	{
		$this->findBySlug($slug)->delete();
	}
}