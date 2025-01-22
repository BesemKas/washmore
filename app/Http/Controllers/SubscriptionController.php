<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\User;
use App\Models\SubscriptionPlan;

class SubscriptionController extends Controller
{
    public function index()
{
    $subscription_plans = SubscriptionPlan::all();
    //dd($subscription_plans); // Debug the data
    return view('home', compact('subscription_plans'));
}


    public function subscribe($id)
    {
        $plan = SubscriptionPlan::findOrFail($id);

        session(['selected_plan' => $plan]);

        return redirect()->away('#');
        
    }
}
