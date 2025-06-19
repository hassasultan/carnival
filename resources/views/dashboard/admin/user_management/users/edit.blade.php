@extends('dashboard.admin.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="mb-2 page-title">Edit User</h2>
        <p class="card-text">Update user information and settings.</p>
        <div class="row my-4">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <strong class="card-title">Edit User Information</strong>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="role_id" value="{{ $user->role_id }}">
                            
                            <!-- Basic Information -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-user mr-2"></i>Basic Information
                                    </h5>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name <span class="text-danger">*</span></label>
                                        <input id="firstname" type="text" class="form-control @error('first_name') is-invalid @enderror"
                                            name="first_name" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus>
                                        @error('first_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name <span class="text-danger">*</span></label>
                                        <input id="lastname" type="text" class="form-control @error('last_name') is-invalid @enderror"
                                            name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name">
                                        @error('last_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ $user->email }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" value="{{ $user->phone }}" required autocomplete="phone">
                                        @error('phone')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="age_range">Age Range</label>
                                        <select id="age_range" class="form-control @error('age_range') is-invalid @enderror" name="age_range">
                                            <option value="">Select Age Range</option>
                                            <option value="adult" @if ($user->age_range == 'adult') selected @endif>Adult</option>
                                            <option value="kid" @if ($user->age_range == 'kid') selected @endif>Kid</option>
                                        </select>
                                        @error('age_range')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Profile Image <small class="text-muted">(Optional - Leave empty to keep current)</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" 
                                                id="image" name="image" accept="image/*">
                                            <label class="custom-file-label" for="image" id="image_label">Choose file</label>
                                        </div>
                                        @error('image')
                                            <span class="invalid-feedback d-block">{{ $message }}</span>
                                        @enderror
                                        @if($user->image)
                                            <div class="mt-2">
                                                <small class="text-muted">Current image:</small>
                                                <img src="{{ asset($user->image) }}" alt="Current Profile" width="100" height="100" style="object-fit: cover; border: 1px solid #ddd; border-radius: 4px;">
                                            </div>
                                        @endif
                                        <small class="form-text text-muted">Supported formats: JPG, PNG, GIF (Max: 2MB)</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-map-pin mr-2"></i>Address Information
                                    </h5>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Street Address</label>
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                            name="address" value="{{ $user->address }}" autocomplete="address">
                                        @error('address')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                            name="city" value="{{ $user->city }}" autocomplete="city">
                                        @error('city')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="state">State/Province</label>
                                        <input id="state" type="text" class="form-control @error('state') is-invalid @enderror"
                                            name="state" value="{{ $user->state }}" autocomplete="state">
                                        @error('state')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input id="country" type="text" class="form-control @error('country') is-invalid @enderror"
                                            name="country" value="{{ $user->country }}" autocomplete="country">
                                        @error('country')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zipcode">ZIP/Postal Code</label>
                                        <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror"
                                            name="zipcode" value="{{ $user->zipcode }}" autocomplete="zipcode">
                                        @error('zipcode')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Role Specific Fields -->
                            @if ($user->isVendor())
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h5 class="text-primary mb-3">
                                            <i class="fe fe-package mr-2"></i>Vendor Package
                                        </h5>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="package">Package</label>
                                            <select id="package" class="form-control select2 @error('package_id') is-invalid @enderror"
                                                name="package_id">
                                                <option value="">Select Package</option>
                                                @foreach ($packages as $package)
                                                    <option value="{{ $package->id }}"
                                                        {{ $user->vendor->package_id == $package->id ? 'selected' : '' }}>
                                                        {{ $package->title }}
                                                    </option>
                                                @endforeach
                                                <option value="section_leader" @if ($user->vendor->package_id == '123') selected @endif>
                                                    Section Leader
                                                </option>
                                            </select>
                                            @error('package_id')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            @elseif ($user->isSubVendor())
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h5 class="text-primary mb-3">
                                            <i class="fe fe-users mr-2"></i>Sub-Vendor Information
                                        </h5>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="vendor">Parent Vendor</label>
                                            <select id="vendor" class="form-control select2 @error('vendor_id') is-invalid @enderror"
                                                name="vendor_id">
                                                <option value="">Select Vendor</option>
                                                @foreach ($vendors as $vendor)
                                                    <option value="{{ $vendor->id }}"
                                                        {{ $user->subVendor->vendor_id == $vendor->id ? 'selected' : '' }}>
                                                        {{ $vendor->user->first_name . ' ' . $vendor->user->last_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('vendor_id')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Account Status -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-settings mr-2"></i>Account Settings
                                    </h5>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Account Status</label>
                                        <select id="status" class="form-control @error('status') is-invalid @enderror" name="status">
                                            <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Package Features (for Vendors) -->
                            @if ($user->isVendor() || $user->isSubVendor())
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h5 class="text-primary mb-3">
                                            <i class="fe fe-settings mr-2"></i>Package Features
                                        </h5>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group list-group mb-3 shadow">
                                            <div class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <strong class="mb-2">E-Commerce</strong>
                                                        <small class="text-muted d-block">Sell products online</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" value="1"
                                                                id="e_com" name="ecommerce"
                                                                @if (($user->vendor && $user->vendor->ecommerce == 1) || ($user->subVendor && $user->subVendor->ecommerce == 1)) checked @endif>
                                                            <label class="custom-control-label" for="e_com"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group list-group mb-3 shadow">
                                            <div class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <strong class="mb-2">Music Upload</strong>
                                                        <small class="text-muted d-block">Upload and manage music</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" value="1"
                                                                id="music" name="music"
                                                                @if (($user->vendor && $user->vendor->music == 1) || ($user->subVendor && $user->subVendor->music == 1)) checked @endif>
                                                            <label class="custom-control-label" for="music"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group list-group mb-3 shadow">
                                            <div class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <strong class="mb-2">Appointments</strong>
                                                        <small class="text-muted d-block">Manage appointments</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" value="1"
                                                                id="appointments" name="appointment"
                                                                @if (($user->vendor && $user->vendor->appointment == 1) || ($user->subVendor && $user->subVendor->appointment == 1)) checked @endif>
                                                            <label class="custom-control-label" for="appointments"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group list-group mb-3 shadow">
                                            <div class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <strong class="mb-2">Events</strong>
                                                        <small class="text-muted d-block">Create and manage events</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" value="1"
                                                                id="events" name="events"
                                                                @if (($user->vendor && $user->vendor->events == 1) || ($user->subVendor && $user->subVendor->events == 1)) checked @endif>
                                                            <label class="custom-control-label" for="events"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group list-group mb-3 shadow">
                                            <div class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <strong class="mb-2">Advertisement Space</strong>
                                                        <small class="text-muted d-block">Display advertisements</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" value="1"
                                                                id="ads" name="ad_space"
                                                                @if (($user->vendor && $user->vendor->ad_space == 1) || ($user->subVendor && $user->subVendor->ad_space == 1)) checked @endif>
                                                            <label class="custom-control-label" for="ads"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group list-group mb-3 shadow">
                                            <div class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <strong class="mb-2">Blogging</strong>
                                                        <small class="text-muted d-block">Create and manage blogs</small>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" value="1"
                                                                id="blogs" name="blogging"
                                                                @if (($user->vendor && $user->vendor->blogging == 1) || ($user->subVendor && $user->subVendor->blogging == 1)) checked @endif>
                                                            <label class="custom-control-label" for="blogs"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Form Actions -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fe fe-save mr-1"></i>Update User
                                        </button>
                                        <a href="{{ route('users.index') }}" class="btn btn-secondary">
                                            <i class="fe fe-arrow-left mr-1"></i>Back to Users
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottom_script')
<script>
$(document).ready(function() {
    // Initialize Select2
    $('.select2').select2({
        theme: 'bootstrap4',
        placeholder: 'Select an option'
    });

    // File input labels
    $('.custom-file-input').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').html(fileName);
    });

    // Form validation
    $('form').on('submit', function() {
        var isValid = true;
        
        // Check required fields
        $('input[required], select[required]').each(function() {
            if (!$(this).val()) {
                $(this).addClass('is-invalid');
                isValid = false;
            } else {
                $(this).removeClass('is-invalid');
            }
        });
        
        return isValid;
    });
});
</script>
@endsection
