<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\ShopOrder;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscription_plans = SubscriptionPlan::all();
        return view('home', compact('subscription_plans'));
    }

    public function subscribe(Request $request, $id)
    {
        // Get the selected plan
        $plan = SubscriptionPlan::findOrFail($id);
        session(['selected_plan' => $plan]);

        // Create the order for the subscription
        $order = ShopOrder::create([
            'user_id' => Auth::id(),
            'order_type' => 'subscription',
            'total' => $plan->plan_price, // Ensure this field matches your database schema
            'status' => 'pending',
            'expires_at' => now()->addHours(48), // Optional: Set an expiration time
        ]);

        // Create orderItems for the order
        OrderItem::create([
            'shop_order_id' => $order->id,
            'orderable_id' => $plan->id,
            'orderable_type' => SubscriptionPlan::class, // Ensure polymorphic relationship
            'quantity' => 1,
        ]);

        // Save order details to session
        session(['order_id' => $order->id, 'order_type' => 'subscription']);

        if (Auth::check()) {
            return view('paymentRequestForm',['order'=>$order]);
        } else {
            return redirect()->route('login');
        }
    }
}
