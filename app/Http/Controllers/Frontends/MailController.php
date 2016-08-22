<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Services\Utilities\MailService;
use App\Services\Validations\ContactFormValidation;
use Illuminate\Http\Request;

class MailController extends Controller
{
	function __construct(Request $request, MailService $mailService)
	{
		$this->request = $request;
		$this->mailService = $mailService;
	}

    public function mailFromContactSection(ContactFormValidation $validator)
    {
    	$params = $this->request->all();
    	$validate = $validator->isValid($params);

    	if(!$validate) {
    		return redirect()->back()
    			->withErrors($validator->getErrors())
    			->withInput();
    	}

    	$this->mailService->mailFromContactForm($params);
    	return redirect()->back();
    }
}
