<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StripePlan;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function stripe(){
        $stripePlans = StripePlan::all();
        return view('admin.pages.payments.stripe')->with(['plans' =>$stripePlans]);
    }
    public function stripeCreate(Request $request){
        $data = $request->all();
        if($request->get('plan_id') !=''){
            $stripePlan = StripePlan::findOrFail($request->get('plan_id'));
            $stripePlan->update([
                'title' =>$data['title'],
                'price' =>$data['price'],
                'duration' =>$data['duration'],
                'plan_code' =>$data['plan_code'],
            ]);
        }else{
            StripePlan::create([
                'title' =>$data['title'],
                'price' =>$data['price'],
                'duration' =>$data['duration'],
                'plan_code' =>$data['plan_code'],
            ]);
        }

        return response()->json(['result' => 'success']);
    }
    public function getStripePlan(Request $request){
        $id = $request->get('id');
        $stripePlan = StripePlan::findOrFail($id);
        return response()->json(['result' => 'success', 'plan' => $stripePlan]);
    }
    public function deleteStripePlan(Request $request, $id){
        $stripePlan = StripePlan::findOrFail($id);
        $stripePlan->delete();
        return redirect()->route('admin.payments.stripe')->with('success_information', 'Stripe plan removed successfully.');
    }
}
