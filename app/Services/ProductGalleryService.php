<?php

namespace App\Services;

use App\Interfaces\SaveInterface;
use App\Services\Utilities\Image;

class ProductGalleryService
{
	/**
	 * Injecting dependencies
	 * 
	 * @param SaveInterface $productGalleryRepository
	 * @param Image         $imageService
	 */
	function __construct(SaveInterface $productGalleryRepository, Image $imageService)
	{
		$this->productGalleryRepository = $productGalleryRepository;
		$this->imageService = $imageService;
	}

	public function all($limit, array $data = [])
	{
		return $this->productGalleryRepository->all($limit, $data);
	}

	public function save(array $data)
	{
		$params['product_id'] = $data['product_id'];

		foreach ($data['gallery'] as $image) {
			$params['image'] = $this->imageService->save($image);
			$this->productGalleryRepository->save($params);
		}
	}

	public function delete($image)
	{
		$this->productGalleryRepository->delete($image);
	}
}