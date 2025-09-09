<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserAccountDetail;

class UserAccountDetailController extends Controller
{
    public function createEdit()
    {
        $user = Auth::user();
        $accountDetail = $user->accountDetail;

        return view('dashboard.admin.user_management.users.accountDetails', compact('accountDetail'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'stripe_account_id' => 'nullable|string|max:255',
            'bank_name' => 'nullable|string|max:255',
            'account_holder_name' => 'nullable|string|max:255',
            'account_number' => 'nullable|string|max:255',
            // 'ifsc_code' => 'nullable|string|max:255',
            'swift_code' => 'nullable|string|max:255',
            'paypal_email' => 'nullable|email|max:255',
            'upi_id' => 'nullable|string|max:255'
        ]);

        $user = Auth::user();

        // Upsert (update if exists, create if not)
        UserAccountDetail::updateOrCreate(
            ['user_id' => $user->id],
            [
                'stripe_account_id' => $request->stripe_account_id,
                'bank_name' => $request->bank_name,
                'account_holder_name' => $request->account_holder_name,
                'account_number' => $request->account_number,
                // 'ifsc_code' => $request->ifsc_code,
                'swift_code' => $request->swift_code,
                'paypal_email' => $request->paypal_email,
                'upi_id' => $request->upi_id
            ]
        );

        return redirect()->back()->with('success', 'Account details saved successfully.');
    }
}
