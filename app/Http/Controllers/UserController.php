<?php

namespace App\Http\Controllers;

use App\Events\UserRegistrationApprovalEvent;
use App\Http\Requests;
use App\Services\UserService;
use App\Services\Validations\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class UserController extends Controller
{
	/**
	 * Injecting dependencies
	 * 
	 * @param UserService $userService
	 */
    function __construct(
        UserService $userService,
        Request $request,
        Validator $validate
    )
    {
    	$this->userService = $userService;
        $this->request = $request;
        $this->validate = $validate;
    }

    public function edit($username)
    {
		$this->userService->get($username);
    	return view('frontend.edit-profile');
    }

    public function update($username)
    {

        $params = $this->request->except(['_token', '_method']);
       
        $validate = $this->validate->isValid($params);

        if(!$validate) {
            return redirect()->back()
                ->withErrors($validator->getErrors())
                ->withInput();
        }

        $this->userService->update($username, $params);
        return redirect()->back()->with('flash_message', 'User details are updated.');
    }

    public function index()
    {
        $limit = $this->request->get('limit') ? $this->request->get('limit') : 20;
        $users = $this->userService->all($limit);
        return view('admin.users.all', compact('users'));
    }

    public function show($username)
    {
        $user = $this->userService->get($username);
        return view('admin.users.show', compact('user'));
    }

    public function approve()
    {
        $params = $this->request->all();
        $user = $this->userService->approve($params);
        Event::fire(new UserRegistrationApprovalEvent($user));
        return redirect()->route('users.index')->with('flash_message', $user->name.' is approved.');
    }
}
