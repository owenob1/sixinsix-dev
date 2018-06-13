<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StripePlan;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $user = \Auth::user();
        $plans = StripePlan::all();
        return view('platform.pages.settings.index')->with(['user' => $user, 'plans' =>$plans]);
    }
    public function subscription(Request $request){
        $user = \Auth::user();
        $plan = $request->get('subscription');
        $user->newSubscription('main',$plan)->create($request->token);
        if ($user->subscribed('main')) {

/****** Stripe trial ends date set ***************/
//            $current = Carbon::now();
//            $trial = env('STRIPE_TRIAL');
//            $trialExpires = Carbon::now()->subMonths($trial);
//            $subscription = $user->subscription('main');
//            $subscription->trial_ends_at = $trialExpires;
//            $subscription->ends_at = $trialExpires->timestamp;
//            $subscription->save();
//
//            $user->trial_ends_at = $trialExpires;
//            $user->save();

/****** Stripe trial ends date set ***************/
            return response()->json(['msg'=>'Successfully subscribed']);
        }
        return response()->json(['msg'=>'Oops there is something error with your input']);

    }
    public  function cancelSubscription(){
        $user = \Auth::user();
        $user->subscription('main')->cancel();
        return redirect()->route('platform.settings')->with('success_cancel', 'Your subscription has been cancelled successfully.');
    }

    public function resumeSubscription(){
        $user = \Auth::user();
        $user->subscription('main')->resume();
        return redirect()->route('platform.settings')->with('success_cancel', 'Your subscription has been resumed successfully.');
    }

    public function upgradeSubscription(Request $request){
        $plan = $request->get('subscription');
        $user = \Auth::user();
        $user->subscription('main')
            ->skipTrial()
            ->swap($plan);
        return redirect()->route('platform.settings')->with('success_cancel', 'Your subscription has been changed successfully.');
    }


}
