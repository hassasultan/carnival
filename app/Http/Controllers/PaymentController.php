<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Charge;
use Stripe\Transfer;

class PaymentController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function testStripe()
    {
        $paymentIntent = PaymentIntent::create([
            'amount' => 1000,
            'currency' => 'usd',
            'payment_method_types' => ['card'],
        ]);

        return response()->json($paymentIntent);
    }

    public function chargeCustomer(Request $request)
    {
        $charge = Charge::create([
            'amount' => 2000,
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Simple charge example',
        ]);

        return response()->json($charge);
    }

    public function splitPayment(Request $request)
    {
        $amount = $request->amount;
        $adminPercentage = $request->admin_percentage;
        $adminFee = intval($amount * ($adminPercentage / 100));
        $sellerAmount = $amount - $adminFee;

        $charge = Charge::create([
            'amount' => $amount,
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Order with admin cut',
        ]);

        $transfer = Transfer::create([
            'amount' => $sellerAmount,
            'currency' => 'usd',
            'destination' => $request->seller_account_id,
            'transfer_group' => $charge->id,
        ]);

        return response()->json([
            'charge' => $charge,
            'transfer' => $transfer,
            'admin_fee' => $adminFee,
            'admin_percentage' => $adminPercentage,
        ]);
    }
}
