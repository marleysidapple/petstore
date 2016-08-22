<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\StateService;
use App\Services\StoreService;
use App\Services\Validations\Validator;
use Illuminate\Http\Request;

class StoreController extends Controller
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
    	$limit = null !== $this->request->get('limit') ? $this->request->get('limit') : 20;
    	$stores = $this->storeService->all($limit);
    	return view('stores.all', compact('stores'));
    }

    public function create()
    {
    	$states = $this->stateService->allWithoutPagination();
    	return view('stores.create', compact('states'));
    }

    public function store()
    {
    	$params = $this->request->all();
    	$validate = $this->validate->isValid($params);

    	if(!$validate) {
    		return redirect()->back()
    			->withErrors($this->validate->getErrors())
    			->withInput();
    	}

    	$this->storeService->save($params);
    	return $this->index();
    }

    public function edit($slug)
    {
    	$store = $this->storeService->get($slug);
    	$states = $this->stateService->allWithoutPagination();
    	return view('stores.edit', compact('store', 'states'));
    }

    public function update($slug)
    {
    	$params = $this->request->all();
    	$validate = $this->validate->isValid($params);

    	if(!$validate) {
    		return redirect()->back()
    			->withErrors($this->validate->getErrors())
    			->withInput();
    	}

    	$this->storeService->update($slug, $params);
    	return $this->index();
    }

    public function destroy($slug)
    {
    	$this->storeService->delete($slug);
    	return redirect()->back()->with('flash_message', 'Store has been remvoed.');
    }
}
