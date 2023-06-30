<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
    public function charge(String $product, $price)
    {
        $user = Auth::user();
        return view('payment',[
            'user'=>$user,
            'intent' => $user->createSetupIntent(),
            'product' => $product,
            'price' => $price
        ]);
    }

    public function processPayment(Request $request, String $product, $price)
    {
        $user = Auth::user();
        $paymentMethod = $request->input('payment_method');
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        try
        {
            $user->charge($price*100, $paymentMethod);
        }
        catch (\Exception $e)
        {
            return back()->withErrors(['message' => 'Payment Failed. ' . $e->getMessage()]);
        }
        return redirect('home');
    }
}
