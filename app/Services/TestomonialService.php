<?php

namespace App\Services;

use App\Repositories\TestomonialRepository;
use App\Services\Utilities\Image;
use Carbon\Carbon;

class TestomonialService
{
	/**
	 * Injecting dependencies
	 * 
	 * @param TestomonialRepository $testomonialRepository
	 * @param Image 				$imageSerivce
	 */
	function __construct(TestomonialRepository $testomonialRepository, Image $imageService)
	{
		$this->testomonialRepository = $testomonialRepository;
		$this->imageService = $imageService;
	}

	public function all($limit, array $data = [])
	{
		return $this->testomonialRepository->all($limit, $data);
	}

	public function get($slug)
	{
		return $this->testomonialRepository->get($slug);
	}

	public function save(array $data)
	{
		$data['image'] = $this->imageService->save($data['image']);
		$data['published_at'] = Carbon::parse($data['published_at']);
		return $this->testomonialRepository->save($data);
	}

	public function update($slug, array $data)
	{
		if(isset($data['image'])) {
			$data['image'] = $this->imageService->save($data['image']);
		}
		$data['published_at'] = Carbon::parse($data['published_at']);
		return $this->testomonialRepository->update($slug, $data);
	}

	public function delete($slug)
	{
		return $this->testomonialRepository->delete($slug);
	}
}