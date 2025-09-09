@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="container">
        <h2>User Account Details</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('account.details.save') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="stripe_account_id">Stripe Account ID</label>
                <input type="text" name="stripe_account_id" class="form-control"
                    value="{{ old('stripe_account_id', $accountDetail->stripe_account_id ?? '') }}">
            </div>

            <div class="form-group">
                <label for="bank_name">Bank Name</label>
                <input type="text" name="bank_name" class="form-control"
                    value="{{ old('bank_name', $accountDetail->bank_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="account_holder_name">Account Holder Name</label>
                <input type="text" name="account_holder_name" class="form-control"
                    value="{{ old('account_holder_name', $accountDetail->account_holder_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="account_number">Account Number</label>
                <input type="text" name="account_number" class="form-control"
                    value="{{ old('account_number', $accountDetail->account_number ?? '') }}">
            </div>

            {{-- <div class="form-group">
                <label for="ifsc_code">IFSC Code</label>
                <input type="text" name="ifsc_code" class="form-control"
                    value="{{ old('ifsc_code', $accountDetail->ifsc_code ?? '') }}">
            </div> --}}

            <div class="form-group">
                <label for="swift_code">SWIFT Code</label>
                <input type="text" name="swift_code" class="form-control"
                    value="{{ old('swift_code', $accountDetail->swift_code ?? '') }}">
            </div>

            <div class="form-group">
                <label for="paypal_email">PayPal Email</label>
                <input type="email" name="paypal_email" class="form-control"
                    value="{{ old('paypal_email', $accountDetail->paypal_email ?? '') }}">
            </div>

            <div class="form-group">
                <label for="upi_id">UPI ID</label>
                <input type="text" name="upi_id" class="form-control"
                    value="{{ old('upi_id', $accountDetail->upi_id ?? '') }}">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Details</button>
        </form>
    </div>
@endsection
