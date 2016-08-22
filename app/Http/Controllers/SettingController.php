<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\SettingRepository;
use App\Services\Validations\Validator;
use Illuminate\Http\Request;

class SettingController extends Controller
{
	/**
	 * Injecting dependencies
	 * 
	 * @param SettingRepository $settingRepository
	 * @param Validator         $validator
	 */
    function __construct(SettingRepository $settingRepository, Validator $validator)
    {
    	$this->settingRepository = $settingRepository;
    	$this->validator = $validator;
    }

    public function index()
    {
    	$settings = $this->settingRepository->all();
    	return view('admin.settings.all', compact('settings'));
    }

    public function store(Request $request)
    {
    	$params = $request->all();
    	$validate = $this->validator->isValid($params);

    	if(!$validate) {
    		return redirect()->back()
    			->withErrors($this->validator->getErrors())
    			->withInput();
    	}

    	$this->settingRepository->update($request->all());
    }
}
