<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\TestomonialService;
use App\Services\Validations\Validator;
use Illuminate\Http\Request;

class TestomonialController extends Controller
{
	/**
	 * Injecting dependencies
	 * 
	 * @param TestomonialService $testomonialService
	 * @param Validator          $validator
	 */
    function __construct(TestomonialService $testomonialService, Validator $validator, Request $request)
    {
    	$this->testomonialService = $testomonialService;
    	$this->validator = $validator;
    	$this->request = $request;
    }

    public function index()
    {
    	$limit = $this->request->get('limit') ? $this->request->get('limit') : 10;
    	$testomonials = $this->testomonialService->all($limit);
        return view('admin.testomonials.all', compact('testomonials'));
    }

    public function create()
    {
        return view('admin.testomonials.create');
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

    	$this->testomonialService->save($params);
        return redirect()->route('testomonials.index')->with('flash_message', $params['title'].' testomonial is added.');
    }

    public function edit($slug)
    {
        $testomonial = $this->testomonialService->get($slug);
        return view('admin.testomonials.edit', compact('testomonial'));
    }

    public function update($id)
    {
    	$params = $this->request->all();
    	$validate = $this->validator->mergeWithExistingRules('image', 'image')->isValid($params);

    	if(!$validate) {
    		return redirect()->back()
                ->withErrors($validator->getErrors())
                ->withInput();
    	}

    	$this->testomonialService->update($id, $params);
        return redirect()->route('testomonials.index')
            ->with('flash_message', $params['title'].' testomonial is updated.');
    }

    public function destroy($id)
    {
    	$this->testomonialService->delete($id);
        return redirect()->route('testomonials.index')
            ->with('flash_message', 'Testomonial is deleted.');
    }
}
