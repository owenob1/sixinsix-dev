<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class SubscribeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user->subscribed('main')) {
            return view('platform/pages/dashboard');
        } else {
            return view('platform/pages/billing/subscribe');
        }
    }

    public function proccessSubscription(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $user = auth()->user();
            $user->newSubscription('main', 'consult')->create($request->stripeToken);

            return view('platform/pages/dashboard');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function cancel()
    {
        $user = auth()->user();
        if ($user->subscription('main')->onGracePeriod()) {
            //
        }
        $user = auth()->user();
        $user->subscription('main')->cancel();
    }

    public function invoices()
    {
        $user = auth()->user();

        $invoices = [];
            if($user->stripe_id != ''){
                try {
                    Stripe::setApiKey(env('STRIPE_SECRET'));

                    $invoices = $user->invoices();

                    return view('platform/pages/billing/invoices', compact('invoices'));
                } catch (\Exception $ex) {
                    return $ex->getMessage();
                }
            }else {
                return view('platform/pages/billing/invoices', compact('invoices'));
            }


    }

    public function invoice($invoice_id)
    {
        $user = auth()->user();

            try {
                Stripe::setApiKey(env('STRIPE_SECRET'));

                $user = auth()->user();

                return $user->downloadInvoice($invoice_id, [
            'vendor'  => 'SixInSix',
            'product' => 'Startup Growth Plan',
        ]);
            } catch (\Exception $ex) {
                return $ex->getMessage();
            }

    }
}
