<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ShopOrder;
use Illuminate\Support\Facades\Http;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function paymentRequest(Request $request)
    {
        $order = ShopOrder::findOrFail(session('order_id'));


        //Different URLs
        $successURL = route('home');
        $failureURL = route('home');
        // $cancelURL = route('#');
        // $notifyURL = route('#');

        //HTTP request to Payment Gateway(Callpay) for payment key
        $response = Http::withBasicAuth('WashMoreUATAPI', 'C9BR6swOnXZfalA5VL1e0iGe0W')
            ->post('https://services.callpay.com/api/v1/payment-key', [

                'amount' => $order->total,
                'merchant_reference' => 'testref123',
                'success_url' => $successURL,
                
            ]);

        $result = $response->json();

        if (isset($result['key']) && isset($result['url']) && isset($result['origin'])) {
            $paymentKey = $result['key'];
            $paymentUrl = $result['url'];
            $origin = $result['origin'];

            //store the payment key in the db
            $payment = Payment::create([
                'user_id' => Auth::id(),
                'amount' => $order->total,
                'payment_key' => $paymentKey,
                'status' => 'pending',
                'merchant_reference' => 'order_' . $order->id,
            ]);

            $order->payments()->attach($payment);

            return redirect($paymentUrl);
        } else {
            return redirect($failureURL);
        }
    }

    public function paymentNotify(Request $request)
    {
        $merchantReference = $request->query('merchant_reference');
        $order_id = substr($merchantReference, 6);
        $order  = ShopOrder::findOrFail($order_id);

        if ($request->query('status') == 'success') {
            $order->update(['status' => 'completed']);

            $order->payments()->updateExistingPivot($order->payments->first()->id,[
                'transaction_id' => $request->query('transaction_id'),
                'status' => 'completed',
            ]);

            if(session('order_type')=== 'subscription'){
                //create subscription

                $order->user->subscriptions()->create([
                    'subscription_plan_id' => session('selected_plan')->id,
                    'start_date' => now(),
                    'end_date' => now()->addYear(),
                ]);
            }
            return redirect(route('home'));
        }
    }
}
