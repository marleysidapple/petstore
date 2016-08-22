<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\ProductGalleryService;
use App\Services\ProductService;
use App\Services\Validations\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        Validator $validator,
        Request $request
    )
    {
    	$this->productService = $productService;
        $this->productGalleryService = $productGalleryService;
    	$this->validator = $validator;
    	$this->request = $request;
        $this->middleware('auth');
    }

    public function index()
    {
    	$limit = $this->request->get('limit') ? $this->request->get('limit') : 10;
    	$products = $this->productService->all($limit);
        return view('admin.products.all', compact('products'));
    }

    public function show($slug)
    {
        return $slug;
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store()
    {
    	$params = $this->request->all();
		$validate = $this->validator->isValid($params);

    	if(!$validate) {
    		return redirect()->back()
                ->withErrors($validator->getErrors())
                ->withInput();
    	}

        $params['is_discount_active'] = ('on' === isset($params['activated_discount'])) ? 1 : 0;
    	$product = $this->productService->save($params);
        $this->productGalleryService->save([
            'gallery' => $params['gallery'],
            'product_id' => $product->id
        ]);

        return redirect()->route('products.index')->with('flash_message', $params['name'].' product added.');
    }

    public function edit($slug)
    {
        $product = $this->productService->get($slug);
        return view('admin.products.edit', compact('product'));
    }

    public function update($slug)
    {
    	$params = $this->request->all();
		$validate = $this->validator->isValid($params);

    	if(!$validate) {
    		return redirect()->back()
                ->withErrors($validator->getErrors())
                ->withInput();
    	}

        $params['activated_discount'] = 'on' === isset($params['activated_discount']) ? 1 : 0;
    	$product = $this->productService->update($slug, $params);

        if ($this->request->hasFile('gallery')) {
            $files = $this->request->file('gallery');

            $this->productGalleryService->save([
                'gallery' => $params['gallery'],
                'product_id' => $product->id
            ]);
        }

        return redirect()->route('products.index')->with('flash_message', $params['name'].' product added.');
    }

    public function destroy($slug)
    {
    	$this->productService->delete($slug);
        return redirect()->route('products.index')->with('flash_message', 'Product has been deleted.');
    }

    public function makeOrder()
    {
        $products = $this->productService->allWithoutPagination();
        return view('frontend.products.shop', compact('products'));
    }
}
