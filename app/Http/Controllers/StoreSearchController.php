<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\StateService;
use App\Services\StoreService;
use App\Services\Validations\Validator;
use Illuminate\Http\Request;

class StoreSearchController extends Controller
{
    /**
	 * Injecting dependencies
	 * 
	 * @param StoreService $store
	 * @param Validator    $validate
	 * @param Request      $request
	 */
    function __construct(StoreService $storeService, StateService $stateService, Validator $validate, Request $request)
    {
    	$this->storeService = $storeService;
    	$this->stateService = $stateService;
    	$this->validate = $validate;
    	$this->request = $request;
    }

    public function index()
    {
    	return view('stores.search');
    	// $keyword = $this->request->only('keyword');

    	// if(null === $keyword['keyword']) {
    	// 	return view('stores.search');
    	// }
    }

    public function search()
    {
    	$keyword = $this->request->only('keyword');
    	$validate = $this->validate->isValid($keyword);

    	if(!$validate) {
    		return view('stores.search-results')
    			->with('error', 'You have not entered any keyword.');
    	}

    	$results = $this->storeService->search($keyword);

    	return view('stores.search-results')
    		->with('results', $results)
    		->with('keyword', $keyword['keyword']);
    }
}