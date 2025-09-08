<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Charge;
use Stripe\Transfer;
use App\Models\Order;

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

    public function createToken(Request $request)
    {
        $request->validate([
            'card_number' => 'required|digits_between:13,19',
            'exp_month'   => 'required|integer|min:1|max:12',
            'exp_year'    => 'required|integer|min:' . date('Y'),
            'cvc'         => 'required|digits:3',
        ]);

        try {
            $token = \Stripe\Token::create([
                'card' => [
                    'number'    => $request->card_number,
                    'exp_month' => $request->exp_month,
                    'exp_year'  => $request->exp_year,
                    'cvc'       => $request->cvc,
                ]
            ]);

            return response()->json([
                'status' => true,
                'token'  => $token->id
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'error'  => $e->getMessage()
            ], 400);
        }
    }

    public function splitPayment(Request $request)
    {
        $order = Order::with(['items.product.user.vendor'])->findOrFail($request->order_id);

        if ($order->payment_method !== 'stripe') {
            return response()->json(['error' => 'Only Stripe payments can be split'], 400);
        }

        // Charge full amount first
        $charge = Charge::create([
            'amount' => intval($order->total_amount * 100), // Stripe works in cents
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Order #' . $order->order_num,
        ]);

        $transfers = [];

        foreach ($order->items as $item) {
            $product = $item->product;
            $owner = $product->user; // Owner can be Vendor or Subvendor
            $vendorAccountId = $owner->stripe_account_id ?? null; // Add this in your users table
            $vendorCommission = 0;
            $subvendorCommission = 0;

            $itemAmount = $item->price * $item->quantity;
            $adminCommission = $itemAmount * 0.05; // 5%

            if ($owner->role->slug === 'vendor') {
                $vendorCommission = $itemAmount - $adminCommission;
            } elseif ($owner->role->slug === 'subvendor') {
                $vendor = $owner->vendor; // Get parent vendor
                $vendorCommission = $itemAmount * 0.10; // 10% to vendor
                $subvendorCommission = $itemAmount - $adminCommission - $vendorCommission;
            }

            // Transfer to vendor
            if ($vendorCommission > 0 && $vendorAccountId) {
                $transfers[] = Transfer::create([
                    'amount' => intval($vendorCommission * 100),
                    'currency' => 'usd',
                    'destination' => $vendorAccountId,
                    'transfer_group' => $charge->id,
                ]);
            }

            // Transfer to subvendor (if applicable)
            if ($subvendorCommission > 0 && isset($owner->stripe_account_id)) {
                $transfers[] = Transfer::create([
                    'amount' => intval($subvendorCommission * 100),
                    'currency' => 'usd',
                    'destination' => $owner->stripe_account_id,
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
