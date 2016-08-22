<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\FaqRepository;
use Illuminate\Http\Request;

class FaqController extends Controller
{
	/**
	 * [__construct description]
	 * @param FaqRepository $faqRepository [description]
	 */
    function __construct(FaqRepository $faqRepository, Request $request)
    {
    	$this->faqRepository = $faqRepository;
    	$this->request = $request;
    }

    public function index()
    {
    	$limit = $this->request->get('limit') ? $this->request->get('limit') : 10;
    	$faqs = $this->faqRepository->all($limit);
    	return view('frontend.faqs.all', compact('faqs'));
    }
}