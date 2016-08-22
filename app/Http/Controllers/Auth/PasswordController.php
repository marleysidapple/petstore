<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['changePassword', 'updatePassword']]);
        $this->middleware('auth', ['only' => ['changePassword', 'updatePassword']]);
    }

    public function changePassword()
    {
        return view('auth.passwords.update');
    }

    public function updatePassword(Request $request)
    {
        $this->validate(
            $request,
            [
                'current_password' => 'required|string',
                'new_password' => 'required|string',
                'confirm_password' => 'required|string|same:new_password'
            ]
        );

        if(!Hash::check($request->get('current_password'), Auth::user()->password)) {
            return redirect()->back()->with('flash_message', 'Invalid Password.');
        }

        Auth::user()->password = Hash::make($request->get('new_password'));
        Auth::user()->save();
        return redirect()->back()->with('flash_message', 'Password is changed.');
    }
}
