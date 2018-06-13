<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
Use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your admin screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/platform';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function confirmGuest($confirmation, $id) {
        $user = User::findOrFail($id);
        if($user->confirmation_code == $confirmation) {
            $user->confirmed = 1;
            $user->save();
            $message = "Your email address has been verified.";
            return redirect()->route('login')->with('message', $message);
        }else {
            $message = "Your confirmation code is not correct or user doesn't exist.";
            return redirect()->route('login')->with('error_confirmation', $message);
        }
    }

    public function login(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if(\Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')], $remember_me))
        {
            if (\Auth::viaRemember()) {
                echo "sdfsdf";
                exit;
            }
            $user = \Auth::user();

            if ($user->confirmed == 0) {
                \Auth::logout();
                return back()->with('error_email_verify', 'Please verify your email address. Also check your spam box.');
            }else {
                if($user->isRole('admin')) {
                    return redirect(route('admin.dashboard'));
                }else {
                    return redirect(route('platform.pages.dashboard'));
                }
            }
        }

        return back()->withInput()->with('error_email_verify', 'Login Failed');
    }

}
