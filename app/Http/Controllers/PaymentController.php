<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Charge;
use Stripe\Transfer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Event;
use App\Models\Music;

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
        $order = Order::with(['items'])->findOrFail($request->order_id);

        if ($order->payment_method !== 'card') {
            return response()->json(['error' => 'Only Stripe payments can be split'], 400);
        }

        if (!$request->stripeToken) {
            return response()->json(['error' => 'Stripe token is required'], 400);
        }

        // ✅ Charge full amount to platform account
        $charge = Charge::create([
            'amount' => intval($order->total_amount * 100), // Stripe uses cents
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Order #' . $order->order_num,
            'transfer_group' => 'ORDER_' . $order->id,
        ]);

        $transfers = [];

        foreach ($order->items as $item) {
            // ✅ Determine model based on type
            $owner = null;

            if ($item->type === 'product') {
                $product = Product::with('user.accountDetail', 'user.vendor')->find($item->product_id);
                $owner = $product ? $product->user : null;
            } elseif ($item->type === 'event') {
                $event = Event::with('user.accountDetail', 'user.vendor')->find($item->product_id);
                $owner = $event ? $event->user : null;
            } elseif ($item->type === 'music') {
                $music = Music::with('user.accountDetail', 'user.vendor')->find($item->product_id);
                $owner = $music ? $music->user : null;
            } else {
                continue; // Skip unknown type
            }

            if (!$owner) {
                continue;
            }

            $vendorAccountId = optional($owner->accountDetail)->stripe_account_id;
            $vendorCommission = 0;
            $subvendorCommission = 0;

            $itemAmount = $item->price * $item->quantity;
            $adminCommission = $itemAmount * 0.05; // 5% platform fee

            if ($owner->role && $owner->role->name === 'vendor') {
                $vendorCommission = $itemAmount - $adminCommission;
            } elseif ($owner->role && $owner->role->name === 'subvendor') {
                $vendor = $owner->vendor; // Parent vendor
                $vendorCommission = $itemAmount * 0.10; // 10% to vendor
                $subvendorCommission = $itemAmount - $adminCommission - $vendorCommission;
            } elseif ($owner->role && $owner->role->name === 'admin') {
                // ✅ Admin owns the product - funds remain in main account (no transfer)
                continue;
            }

            dd([
                'adminCommission' => $adminCommission,
                'vendorAccountId' => $vendorAccountId,
                'vendorCommission' => $vendorCommission,
                'subvendorCommission' => $subvendorCommission,
                'owner' => $owner,
                'role' => optional($owner->role)->slug,
            ]);

            // ✅ Transfer to Vendor
            if ($vendorCommission > 0 && $vendorAccountId) {
                $transfers[] = Transfer::create([
                    'amount' => intval($vendorCommission * 100),
                    'currency' => 'usd',
                    'destination' => $vendorAccountId,
                    'transfer_group' => 'ORDER_' . $order->id,
                ]);
            }

            // ✅ Transfer to SubVendor (if applicable)
            if ($subvendorCommission > 0 && isset($owner->accountDetail->stripe_account_id)) {
                $transfers[] = Transfer::create([
                    'amount' => intval($subvendorCommission * 100),
                    'currency' => 'usd',
                    'destination' => $owner->accountDetail->stripe_account_id,
                    'transfer_group' => 'ORDER_' . $order->id,
                ]);
            }
        }

        return response()->json([
            'charge' => $charge,
            'transfers' => $transfers,
        ]);
    }
}
