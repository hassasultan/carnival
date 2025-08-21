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
        $totalAmount = $request->amount;
        $vendors = $request->vendors; // Array of vendors with rules
        $stripeToken = $request->stripeToken;

        $charge = Charge::create([
            'amount' => $totalAmount,
            'currency' => 'usd',
            'source' => $stripeToken,
            'description' => 'Order with multiple vendor payouts',
        ]);

        $transfers = [];
        foreach ($vendors as $vendor) {
            $vendorAmount = $vendor['amount'];
            $serviceFee = intval($vendorAmount * ($vendor['service_fee'] / 100));
            $override = isset($vendor['override']) ? intval($vendorAmount * ($vendor['override'] / 100)) : 0;
            $payout = $vendorAmount - $serviceFee - $override;

            $transfers[] = [
                'vendor' => $vendor['id'],
                'transfer' => Transfer::create([
                    'amount' => $payout,
                    'currency' => 'usd',
                    'destination' => $vendor['account_id'],
                    'transfer_group' => $charge->id,
                ]),
                'service_fee' => $serviceFee,
                'override' => $override,
            ];

            if ($override > 0 && isset($vendor['override_account_id'])) {
                Transfer::create([
                    'amount' => $override,
                    'currency' => 'usd',
                    'destination' => $vendor['override_account_id'],
                    'transfer_group' => $charge->id,
                ]);
            }
        }

        return response()->json([
            'charge' => $charge,
            'transfers' => $transfers,
        ]);
    }
}
