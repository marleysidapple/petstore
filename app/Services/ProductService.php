<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Services\Utilities\Image;
use Carbon\Carbon;

class ProductService
{
	/**
	 * Injecting dependencies
	 * 
	 * @param ProductRepository $productRepository
	 * @param Image 			$imageSerivce
	 */
	function __construct(ProductRepository $productRepository, Image $imageService)
	{
		$this->productRepository = $productRepository;
		$this->imageService = $imageService;
	}

	public function all($limit, array $data = [])
	{
		return $this->productRepository->all($limit, $data);
	}

	public function allWithoutPagination(array $data = [])
	{
		return $this->productRepository->allWithoutPagination($data);
	}

	public function get($slug)
	{
		return $this->productRepository->findBySlug($slug);
	}

	public function save(array $data)
	{
		$data['slug'] = rtrim(implode('-', explode(' ', strtolower($data['name']))), '.');
		$data['featured_image'] = $this->imageService->save($data['featured_image']);
		$data['published_at'] = Carbon::parse($data['published_at']);
		return $this->productRepository->save($data);
	}

	public function update($slug, array $data)
	{
		if(isset($data['featured_image'])) {
			$data['featured_image'] = $this->imageService->save($data['featured_image']);
		}

		$data['slug'] = rtrim(implode('-', explode(' ', strtolower($data['name']))), '.');
		$data['published_at'] = Carbon::parse($data['published_at']);
		return $this->productRepository->update($slug, $data);
	}

	public function delete($slug)
	{
		$this->productRepository->delete($slug);
	}

	public function filterProducts(array $products)
    {
        foreach ($products as $key => $product) {
            if('' == trim($product['quantity'])) {
                continue;
            }

            $data[$key] = $product;
        }

        return $data;
    }
}