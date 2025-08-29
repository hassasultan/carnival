<div class="row mb-4">
    <div class="col-12">
        <h5 class="text-primary mb-3">
            <i class="fe fe-credit-card mr-2"></i> Bank Account Information
        </h5>
    </div>

    <!-- Account Holder Name -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="account_holder">
                <i class="fe fe-user mr-1 text-secondary"></i> Account Holder Name
            </label>
            <input id="account_holder" type="text" class="form-control @error('account_holder') is-invalid @enderror"
                name="account_holder"
                value="{{ old('account_holder', $user->bankAccount->account_holder ?? '') }}"
                placeholder="Enter account holder name">
            @error('account_holder')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Bank Name -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="bank_name">
                <i class="fe fe-home mr-1 text-secondary"></i> Bank Name
            </label>
            <input id="bank_name" type="text" class="form-control @error('bank_name') is-invalid @enderror"
                name="bank_name"
                value="{{ old('bank_name', $user->bankAccount->bank_name ?? '') }}"
                placeholder="Enter bank name">
            @error('bank_name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Account Number -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="account_number">
                <i class="fe fe-hash mr-1 text-secondary"></i> Account Number
            </label>
            <input id="account_number" type="text" class="form-control @error('account_number') is-invalid @enderror"
                name="account_number"
                value="{{ old('account_number', $user->bankAccount->account_number ?? '') }}"
                placeholder="Enter account number">
            @error('account_number')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- IBAN -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="iban">
                <i class="fe fe-lock mr-1 text-secondary"></i> IBAN
            </label>
            <input id="iban" type="text" class="form-control @error('iban') is-invalid @enderror"
                name="iban"
                value="{{ old('iban', $user->bankAccount->iban ?? '') }}"
                placeholder="PKXX-XXXX-XXXXXXXXXXXXXXX">
            @error('iban')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Branch Code -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="branch_code">
                <i class="fe fe-map-pin mr-1 text-secondary"></i> Branch Code
            </label>
            <input id="branch_code" type="text" class="form-control @error('branch_code') is-invalid @enderror"
                name="branch_code"
                value="{{ old('branch_code', $user->bankAccount->branch_code ?? '') }}"
                placeholder="Enter branch code">
            @error('branch_code')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Swift Code -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="swift_code">
                <i class="fe fe-globe mr-1 text-secondary"></i> SWIFT Code
            </label>
            <input id="swift_code" type="text" class="form-control @error('swift_code') is-invalid @enderror"
                name="swift_code"
                value="{{ old('swift_code', $user->bankAccount->swift_code ?? '') }}"
                placeholder="Enter SWIFT code">
            @error('swift_code')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
