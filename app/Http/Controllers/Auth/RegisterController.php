<?php

namespace App\Http\Controllers\Auth;

use App\Mail\userCreated;
use App\User;
use App\UserProfile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
Use Illuminate\Http\Request;
use App\StripePlan;
use App\RoleUser;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller  the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'first_name' =>'required',
            'last_name' =>'required',
            'website' =>'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $confirmation_code = $this->quickRandom(32).time();
         $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'confirmed' => 0,
            'confirmation_code' =>$confirmation_code
        ]);
         return $user;
    }

    public function register(Request $request){
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        $data = $request->all();
        $profile = UserProfile::create([
                        'first_name' =>$data['first_name'],
                        'last_name' =>$data['last_name'],
                        'website' =>$data['website'],
                        'user_id' =>$user->id,
                    ]);
        $roleUser = new RoleUser();
        $roleUser->role_id = 1;
        $roleUser->user_id = $user->id;
        $roleUser->save();

        $url = route('confirmGuest', [$user->confirmation_code, $user->id ]);
        \Mail::to($user->email)->send(new userCreated($url, $user, $profile));

        $plan = $request->get('subscription');
        $user->newSubscription('main',$plan)->create($request->token);
        if ($user->subscribed('main')) {
            $this->guard()->logout($user);
            return response()->json(['msg'=>'Your account has been created successfully. Please verify your email address']);
        }

        return response()->json(['msg'=>'Oops there is something error with your input']);


//        return redirect()->route('login')->with('message', 'Your account has been created successfully. Please verify your email address');
    }

    public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

    public function showRegistrationForm()
    {
        $plans=StripePlan::all();
        return view('auth.register', compact('plans'));
    }
}
