<?php

namespace App\Repositories;

use App\Interfaces\DeleteInterface;
use App\Interfaces\SaveInterface;
use App\Interfaces\ShowAllInterface;
use App\ProductGallery;

class ProductGalleryRepository implements SaveInterface, ShowAllInterface, DeleteInterface
{
	/**
	 * Injecting dependencies
	 * 
	 * @param ProductGallery $productGallery
	 */
	function __construct(ProductGallery $productGallery)
	{
		$this->productGallery = $productGallery;
	}

	public function all($limit, array $data = [])
	{
		return $this->productGallery->latest()->paginate($limit);
	}

	public function save(array $data)
	{
		return $this->productGallery->create($data);
	}

	public function findByImage($image)
	{
		return $this->productGallery->where('image', $image)->first();
	}

	public function delete($image, array $data = [])
	{
		$this->findByImage($image)->delete();
	}
}