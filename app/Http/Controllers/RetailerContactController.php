<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\RetailerContactService;
use App\Services\StateService;
use App\Services\Validations\Validator;
use Illuminate\Http\Request;

class RetailerContactController extends Controller
{
    /**
	 * Injecting dependencies
	 * 
	 * @param RetailerContactService $retailerContact
	 * @param Validator    $validate
	 * @param Request      $request
	 */
    function __construct(
    	RetailerContactService $retailerContactService,
    	StateService $stateService,
    	Validator $validate,
    	Request $request
    )
    {
    	$this->retailerContactService = $retailerContactService;
    	$this->stateService = $stateService;
    	$this->validate = $validate;
    	$this->request = $request;
    }

    public function index()
    {
    	$limit = null !== $this->request->get('limit') ? $this->request->get('limit') : 20;
    	$retailerContacts = $this->retailerContactService->all($limit);
    	return view('retailer-contacts.all', compact('retailerContacts'));
    }

    public function create()
	{
		$states = $this->stateService->allWithoutPagination();
		return view('retailer-contacts.create', compact('states'));
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

    	$retailerContact = $this->retailerContactService->save($params);

    	return redirect()->route('retailer-contacts.index')
                ->with('flash_message', $retailerContact->name. ' is created.');
	}

    public function edit($slug)
    {
        $retailerContact = $this->retailerContactService->get($slug);
        $states = $this->stateService->allWithoutPagination();
        return view('retailer-contacts.edit', compact('states', 'retailerContact'));
    }

    public function update($slug)
    {
        $params = $this->request->all();
        $validate = $this->validate->isValid($params);

        if(!$validate) {
            return redirect()->back()
                ->with('flash_message', 'You got some errors in the form.')
                ->withErrors($this->validate->getErrors())
                ->withInput();
        }

        $retailerContact = $this->retailerContactService->update($slug, $params);
        return redirect()->route('retailer-contacts.index')
                ->with('flash_message', $retailerContact->name. ' is updated.');
    }

    public function destroy($slug)
    {
        $this->retailerContactService->delete($slug);
        return redirect()->route('retailer-contacts.index')
                ->with('flash_message', 'Contact is deleted.');
    }
}
