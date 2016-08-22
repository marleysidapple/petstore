<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\FaqRepository;
use App\Services\Validations\Validator;
use Illuminate\Http\Request;

class FaqController extends Controller
{
	/**
	 * [__construct description]
	 * @param FaqRepository $faqRepository [description]
	 */
    function __construct(FaqRepository $faqRepository, Request $request, Validator $validator)
    {
    	$this->faqRepository = $faqRepository;
    	$this->request = $request;
    	$this->validator = $validator;
    }

    public function index()
    {
    	$limit = $this->request->get('limit') ? $this->request->get('limit') : 10;
    	$faqs = $this->faqRepository->all($limit);
    	return view('admin.faqs.all', compact('faqs'));
    }

    public function create()
    {
    	return view('admin.faqs.create');
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

    	$faq = $this->faqRepository->save($params);
    	return redirect()->route('faqs.index')->with("Faq title '". $faq->title ."' is added");
    }

    public function edit($slug)
    {
    	$faq = $this->faqRepository->findBySlug($slug);
    	return view('admin.faqs.edit', compact('faq'));
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

    	$faq = $this->faqRepository->update($slug, $params);
    	return redirect()->route('faqs.index')->with("Faq title '". $faq->title ."' is updated");
    }

    public function destroy($slug)
    {
    	$faq = $this->faqRepository->delete($slug);
    	return redirect()->route('faqs.index')->with("flash_message", "Faq title '". $faq->title ."' is deleted");
    }
}
