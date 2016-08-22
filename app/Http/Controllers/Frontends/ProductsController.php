<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\FaqRepository;
use App\Services\ProductGalleryService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
	 * Injecting dependencies
	 * 
	 * @param ProductService $productService
	 * @param Validator      $validator
	 */
    function __construct(
        ProductService $productService,
        ProductGalleryService $productGalleryService,
        Request $request,
        FaqRepository $faqRepository
    )
    {
    	$this->productService = $productService;
    	$this->productGalleryService = $productGalleryService;
    	$this->request = $request;
        $this->faqRepository = $faqRepository;
    }

    public function index()
    {
    	$limit = $this->request->get('limit') ? $this->request->get('limit') : 10;
    	$products = $this->productService->all($limit);
        $faqs = $this->faqRepository->allWithoutPagination();
        return view('frontend.products.all', compact('products', 'faqs'));
    }

    public function show($slug)
    {
    	$product = $this->productService->get($slug);
    	return $product;
    }

    public function pricing()
    {
        $limit = $this->request->get('limit') ? $this->request->get('limit') : 10;
        $products = $this->productService->all($limit);
        $faqs = $this->faqRepository->allWithoutPagination();
        return view('frontend.products.pricing', compact('products', 'faqs'));
    }
}
