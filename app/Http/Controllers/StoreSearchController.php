<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\StateService;
use App\Services\StoreService;
use App\Services\Validations\Validator;
use Illuminate\Http\Request;
use App\Store;
use App\State;
use GCH;

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
      /*  $allAdd = GCH::geolocate_address('');
        dd($allAdd);*/
        $stores = Store::all();
        $latLng = [];
        foreach ($stores as $key => $value) {
            $coordinates = GCH::geolocate_address($value->street_address);  
            $coordinates['storename'] = $value->store_name;
            array_push($latLng, $coordinates);
        }
       
        $states = State::all();
    	return view('stores.search', compact(array('states', 'latLng')));
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