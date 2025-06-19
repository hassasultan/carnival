@extends('dashboard.admin.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="mb-2 page-title">Create New User</h2>
        <p class="card-text">Register a new user with complete profile information.</p>
        <div class="row my-4">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <strong class="card-title">User Registration Form</strong>
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

                        <form method="POST" action="{{ route('users.register') }}" enctype="multipart/form-data">
                            @csrf
                            
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
                            name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                        @error('first_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name <span class="text-danger">*</span></label>
                        <input id="lastname" type="text" class="form-control @error('last_name') is-invalid @enderror"
                            name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
                        @error('last_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" value="{{ old('phone') }}" required autocomplete="phone">
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
                                            <option value="adult" {{ old('age_range') == 'adult' ? 'selected' : '' }}>Adult</option>
                                            <option value="kid" {{ old('age_range') == 'kid' ? 'selected' : '' }}>Kid</option>
                    </select>
                    @error('age_range')
                                            <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                                </div>
                                
                                <div class="col-md-6">
                <div class="form-group">
                                        <label for="age">Age</label>
                                        <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" 
                                            name="age" value="{{ old('age') }}" min="1" max="120">
                                        @error('age')
                                            <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nationality">Nationality</label>
                                        <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" 
                                            name="nationality" value="{{ old('nationality') }}">
                                        @error('nationality')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                </div>
                        </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="height">Height (cm)</label>
                                        <input id="height" type="number" class="form-control @error('height') is-invalid @enderror" 
                                            name="height" value="{{ old('height') }}" min="50" max="250">
                                        @error('height')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="weight">Weight (kg)</label>
                                        <input id="weight" type="number" class="form-control @error('weight') is-invalid @enderror" 
                                            name="weight" value="{{ old('weight') }}" min="20" max="200">
                                        @error('weight')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="bust">Bust (cm)</label>
                                        <input id="bust" type="number" class="form-control @error('bust') is-invalid @enderror" 
                                            name="bust" value="{{ old('bust') }}" min="50" max="150">
                                        @error('bust')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="waist">Waist (cm)</label>
                                        <input id="waist" type="number" class="form-control @error('waist') is-invalid @enderror" 
                                            name="waist" value="{{ old('waist') }}" min="40" max="150">
                                        @error('waist')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="hips">Hips (cm)</label>
                                        <input id="hips" type="number" class="form-control @error('hips') is-invalid @enderror" 
                                            name="hips" value="{{ old('hips') }}" min="50" max="200">
                                        @error('hips')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Profile Image <span class="text-danger">*</span></label>
                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" 
                                                id="image" name="image" required accept="image/*">
                                            <label class="custom-file-label" for="image" id="image_label">Choose file</label>
                        </div>
                                        @error('image')
                                            <span class="invalid-feedback d-block">{{ $message }}</span>
                                        @enderror
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
                                        <label for="address">Street Address <span class="text-danger">*</span></label>
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                            name="address" value="{{ old('address') }}" required autocomplete="address">
                    @error('address')
                                            <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                        <label for="city">City <span class="text-danger">*</span></label>
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                            name="city" value="{{ old('city') }}" required autocomplete="city">
                        @error('city')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="state">State/Province <span class="text-danger">*</span></label>
                        <input id="state" type="text" class="form-control @error('state') is-invalid @enderror"
                                            name="state" value="{{ old('state') }}" required autocomplete="state">
                        @error('state')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                        <label for="country">Country <span class="text-danger">*</span></label>
                        <input id="country" type="text" class="form-control @error('country') is-invalid @enderror"
                                            name="country" value="{{ old('country') }}" required autocomplete="country">
                        @error('country')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zipcode">ZIP/Postal Code <span class="text-danger">*</span></label>
                        <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror"
                                            name="zipcode" value="{{ old('zipcode') }}" required autocomplete="zipcode">
                        @error('zipcode')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                                </div>
                            </div>

                            <!-- Account Security -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-lock mr-2"></i>Account Security
                                    </h5>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password <span class="text-danger">*</span></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <small class="form-text text-muted">Minimum 8 characters</small>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password <span class="text-danger">*</span></label>
                                        <input id="password-confirm" type="password" class="form-control" 
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>

                            <!-- Package & Role Selection -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-package mr-2"></i>Package & Role Selection
                                    </h5>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                        <label for="package">Package <span class="text-danger">*</span></label>
                        <select id="package" class="form-control select2 @error('package_id') is-invalid @enderror"
                            name="package_id" required>
                            <option value="">Select Package</option>
                            @foreach ($packages as $package)
                                                <option value="{{ $package->id }}" {{ old('package_id') == $package->id ? 'selected' : '' }}>
                                                    {{ $package->title }}
                                                </option>
                            @endforeach
                                            <option value="section_leader" {{ old('package_id') == 'section_leader' ? 'selected' : '' }}>
                                                Section Leader
                                            </option>
                        </select>
                        @error('package_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group" id="vendors_input" style="display: none;">
                                        <label for="vendor">Parent Vendor</label>
                        <select id="vendor" class="form-control select2 @error('vendor_id') is-invalid @enderror"
                            name="vendor_id">
                                            <option value="">Select Vendor</option>
                            @foreach ($vendors as $vendor)
                                                <option value="{{ $vendor->id }}" {{ old('vendor_id') == $vendor->id ? 'selected' : '' }}>
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

                            <!-- Package Features (Dynamic) -->
                            <div class="row mb-4" id="package-features" style="display: none;">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-settings mr-2"></i>Package Features
                                    </h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group list-group mb-3 shadow" id="ecommerce-box" style="display: none;">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">E-Commerce</strong>
                                                            <small class="text-muted d-block">Sell products online</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="e_com" name="ecommerce">
                                            <label class="custom-control-label" for="e_com"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                                            <div class="form-group list-group mb-3 shadow" id="music-box" style="display: none;">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Music Upload</strong>
                                                            <small class="text-muted d-block">Upload and manage music</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="music" name="music">
                                            <label class="custom-control-label" for="music"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                                            <div class="form-group list-group mb-3 shadow" id="appointment-box" style="display: none;">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Appointments</strong>
                                                            <small class="text-muted d-block">Manage appointments</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="appointments" name="appointment">
                                            <label class="custom-control-label" for="appointments"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group list-group mb-3 shadow" id="events-box" style="display: none;">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Events</strong>
                                                            <small class="text-muted d-block">Create and manage events</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="events" name="events">
                                            <label class="custom-control-label" for="events"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                                            <div class="form-group list-group mb-3 shadow" id="ad_space-box" style="display: none;">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                                            <strong class="mb-2">Advertisement Space</strong>
                                                            <small class="text-muted d-block">Display advertisements</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="ads" name="ad_space">
                                            <label class="custom-control-label" for="ads"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                                            <div class="form-group list-group mb-3 shadow" id="blogging-box" style="display: none;">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                                            <strong class="mb-2">Blogging</strong>
                                                            <small class="text-muted d-block">Create and manage blogs</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="blogs" name="blogging">
                                            <label class="custom-control-label" for="blogs"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
                                </div>

                            <!-- Shop Information -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-shopping-bag mr-2"></i>Shop Information
                                    </h5>
                                    </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shop_name">Shop Name <span class="text-danger">*</span></label>
                                        <input id="shop_name" type="text" class="form-control @error('shop_name') is-invalid @enderror" 
                                            name="shop_name" value="{{ old('shop_name') }}" required autocomplete="shop_name">
                                        @error('shop_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shop_email">Shop Email <span class="text-danger">*</span></label>
                                        <input id="shop_email" type="email" class="form-control @error('shop_email') is-invalid @enderror" 
                                            name="shop_email" value="{{ old('shop_email') }}" required autocomplete="shop_email">
                                        @error('shop_email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shop_address">Shop Address <span class="text-danger">*</span></label>
                                        <input id="shop_address" type="text" class="form-control @error('shop_address') is-invalid @enderror" 
                                            name="shop_address" value="{{ old('shop_address') }}" required autocomplete="shop_address">
                                        @error('shop_address')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shop_phone">Shop Phone <span class="text-danger">*</span></label>
                                        <input id="shop_phone" type="text" class="form-control @error('shop_phone') is-invalid @enderror" 
                                            name="shop_phone" value="{{ old('shop_phone') }}" required autocomplete="shop_phone">
                                        @error('shop_phone')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                            </div>
                        </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="continent">Continent <span class="text-danger">*</span></label>
                                        <select id="continent" class="form-control select2 @error('continent') is-invalid @enderror" 
                                            name="continent" required>
                                            <option value="">Select Continent</option>
                                            @foreach ($continents as $continent)
                                                <option value="{{ $continent->id }}" {{ old('continent') == $continent->id ? 'selected' : '' }}>
                                                    {{ $continent->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('continent')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                    </div>
                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="short_description">Short Description</label>
                                        <textarea id="short_description" class="form-control @error('short_description') is-invalid @enderror" 
                                            name="short_description" rows="3" placeholder="Enter a brief description about your business">{{ old('short_description') }}</textarea>
                                        @error('short_description')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo">Shop Logo <span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('logo') is-invalid @enderror" 
                                                id="logo" name="logo" required accept="image/*">
                                            <label class="custom-file-label" for="logo" id="logo_label">Choose file</label>
                </div>
                                        @error('logo')
                                            <span class="invalid-feedback d-block">{{ $message }}</span>
                        @enderror
                                        <small class="form-text text-muted">Supported formats: JPG, PNG, GIF (Max: 2MB)</small>
                    </div>
                    </div>
                </div>

                            <!-- Social Media Information -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-share-2 mr-2"></i>Social Media Links
                                    </h5>
                        </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                        <label for="shop_insta">Instagram</label>
                                        <input id="shop_insta" type="url" class="form-control @error('shop_insta') is-invalid @enderror" 
                                            name="shop_insta" value="{{ old('shop_insta') }}" placeholder="https://instagram.com/yourhandle">
                        @error('shop_insta')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                        <label for="shop_facebook">Facebook</label>
                                        <input id="shop_facebook" type="url" class="form-control @error('shop_facebook') is-invalid @enderror" 
                                            name="shop_facebook" value="{{ old('shop_facebook') }}" placeholder="https://facebook.com/yourpage">
                        @error('shop_facebook')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shop_youtube">YouTube</label>
                                        <input id="shop_youtube" type="url" class="form-control @error('shop_youtube') is-invalid @enderror" 
                                            name="shop_youtube" value="{{ old('shop_youtube') }}" placeholder="https://youtube.com/yourchannel">
                        @error('shop_youtube')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                        <label for="shop_twitter">Twitter</label>
                                        <input id="shop_twitter" type="url" class="form-control @error('shop_twitter') is-invalid @enderror" 
                                            name="shop_twitter" value="{{ old('shop_twitter') }}" placeholder="https://twitter.com/yourhandle">
                        @error('shop_twitter')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shop_tiktok">TikTok</label>
                                        <input id="shop_tiktok" type="url" class="form-control @error('shop_tiktok') is-invalid @enderror" 
                                            name="shop_tiktok" value="{{ old('shop_tiktok') }}" placeholder="https://tiktok.com/@yourhandle">
                        @error('shop_tiktok')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shop_wa_business_page">WhatsApp Business</label>
                                        <input id="shop_wa_business_page" type="url" class="form-control @error('shop_wa_business_page') is-invalid @enderror" 
                                            name="shop_wa_business_page" value="{{ old('shop_wa_business_page') }}" placeholder="https://wa.me/yournumber">
                        @error('shop_wa_business_page')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                        <label for="shop_linkedin">LinkedIn</label>
                                        <input id="shop_linkedin" type="url" class="form-control @error('shop_linkedin') is-invalid @enderror" 
                                            name="shop_linkedin" value="{{ old('shop_linkedin') }}" placeholder="https://linkedin.com/in/yourprofile">
                        @error('shop_linkedin')
                                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    </div>
                    </div>

                            <!-- Banner Section -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-image mr-2"></i>Banner Information
                                    </h5>
                </div>
                                
                                <div class="col-12">
                                    <div id="bannerSection">
                                        <div class="banner-item card mb-3">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Banner #1</h6>
                    </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="banner">Banner Image <span class="text-danger">*</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="banner_${bannerIndex}" name="banner_files[${bannerIndex}]" required accept="image/*,video/*">
                                                        <label class="custom-file-label" for="banner_${bannerIndex}">Choose file</label>
                    </div>
                                                    <small class="form-text text-muted">Supported formats: JPG, PNG, GIF, MP4 (Max: 10MB)</small>
                    </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="banner_title">Banner Title</label>
                                                            <input type="text" class="form-control" name="banners[${bannerIndex}][title]" placeholder="Enter banner title">
                    </div>
                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="banner_subtitle">Banner Subtitle</label>
                                                            <input type="text" class="form-control" name="banners[${bannerIndex}][subtitle]" placeholder="Enter banner subtitle">
                    </div>
                    </div>
                    </div>

                                                <div class="form-group">
                                                    <label for="banner_description">Banner Description</label>
                                                    <textarea class="form-control" name="banners[${bannerIndex}][description]" rows="3" placeholder="Enter banner description"></textarea>
                </div>

                                                <div class="form-group">
                                                    <label for="banner_button">Button Text</label>
                                                    <input type="text" class="form-control" name="banners[${bannerIndex}][button_text]" placeholder="Enter button text">
                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="button" id="addBannerBtn" class="btn btn-outline-success">
                                        <i class="fe fe-plus mr-1"></i>Add Another Banner
                                    </button>
                                </div>
                            </div>

                            <!-- Sponsors Section -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-award mr-2"></i>Sponsors Information
                                    </h5>
                                </div>
                                
                                <div class="col-12">
                                    <div id="sponsorsSection">
                                        <div class="sponsor-item card mb-3">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Sponsor #1</h6>
                                            </div>
                                            <div class="card-body">
                                    <div class="form-group">
                                                    <label for="sponsor_logo">Sponsor Logo <span class="text-danger">*</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="sponsor_logo_${sponsorIndex}" name="sponsor_logos[${sponsorIndex}]" required accept="image/*">
                                                        <label class="custom-file-label" for="sponsor_logo_${sponsorIndex}">Choose file</label>
                                    </div>
                                                    <small class="form-text text-muted">Supported formats: JPG, PNG, GIF (Max: 2MB)</small>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                    <div class="form-group">
                                                            <label for="sponsor_name_${sponsorIndex}">Sponsor Name</label>
                                                            <input type="text" class="form-control" name="sponsors[${sponsorIndex}][name]" placeholder="Enter sponsor name">
                                    </div>
                                </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="sponsor_website_${sponsorIndex}">Website URL</label>
                                                            <input type="url" class="form-control" name="sponsors[${sponsorIndex}][website]" placeholder="https://example.com">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                            </div>
                                    
                                    <button type="button" id="addSponsorBtn" class="btn btn-outline-success">
                                        <i class="fe fe-plus mr-1"></i>Add Another Sponsor
                                    </button>
                                </div>
                            </div>

                            <!-- Tabs Section -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h5 class="text-primary mb-3">
                                        <i class="fe fe-layers mr-2"></i>Content Tabs
                                    </h5>
                                    </div>
                                
                                <div class="col-12">
                                    <div id="tabsSection">
                                        <div class="tab-item card mb-3">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Tab #1</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                    <div class="form-group">
                                                            <label for="tab_name">Tab Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="tab_name[]" placeholder="Enter tab name" required>
                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                    <div class="form-group">
                                                            <label for="tab_description">Tab Description</label>
                                                            <textarea class="form-control" name="tab_description[]" rows="3" placeholder="Enter tab description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                    
                                    <button type="button" id="addTabBtn" class="btn btn-outline-success">
                                        <i class="fe fe-plus mr-1"></i>Add Another Tab
                                    </button>
                </div>
                            </div>

                            <!-- Form Actions -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fe fe-save mr-1"></i>Create User
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
        $(this).next('.custom-file-label').html(fileName || 'Choose file');
    });

    // Package selection logic
    $('#package').on('change', function() {
        var packageId = $(this).val();
        var vendorInput = $('#vendors_input');
        var packageFeatures = $('#package-features');
        var ageRange = $('#age_range').val();
        
        // Hide all feature boxes first
        $('.packages-div .list-group').hide();
        
        if (packageId) {
            // Show package features
            packageFeatures.show();
            
            // Show specific features based on package
            if (packageId === 'section_leader') {
                $('#events-box').show();
                $('#ad_space-box').show();
                $('#blogging-box').show();
            } else {
                // Show all features for other packages
                $('#ecommerce-box').show();
                $('#music-box').show();
                $('#appointment-box').show();
                $('#events-box').show();
                $('#ad_space-box').show();
                $('#blogging-box').show();
            }
            
            // Show vendor selection only for section_leader OR when age range is kid
            if (packageId === 'section_leader' || ageRange === 'kid') {
                vendorInput.show();
                // Reinitialize Select2 for vendor dropdown to fix styling
                $('#vendor').select2({
                    theme: 'bootstrap4',
                    width: '100%'
                });
            } else {
                vendorInput.hide();
            }
        } else {
            packageFeatures.hide();
            vendorInput.hide();
        }
    });

    // Age range change logic
    $('#age_range').on('change', function() {
        var packageId = $('#package').val();
        var ageRange = $(this).val();
        var vendorInput = $('#vendors_input');
        
        // Show vendor selection only for section_leader OR when age range is kid
        if (packageId === 'section_leader' || ageRange === 'kid') {
            vendorInput.show();
            // Reinitialize Select2 for vendor dropdown to fix styling
            $('#vendor').select2({
                theme: 'bootstrap4',
                width: '100%'
            });
        } else {
            vendorInput.hide();
        }
    });

    // Banner management
    let bannerIndex = 0;
    
    // Initialize counters on document ready
    $(document).ready(function() {
        bannerIndex = $('.banner-item').length;
        sponsorIndex = $('.sponsor-item').length;
        tabIndex = $('.tab-item').length;
    });
    
            $('#addBannerBtn').click(function() {
        bannerIndex++;
        var newBanner = `
            <div class="banner-item card mb-3">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Banner #${bannerIndex}</h6>
                    <button type="button" class="btn btn-sm btn-outline-danger remove-banner">
                        <i class="fe fe-trash"></i>
                    </button>
                    </div>
                <div class="card-body">
                            <div class="form-group">
                        <label for="banner_${bannerIndex}">Banner Image <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="banner_${bannerIndex}" name="banner_files[${bannerIndex}]" required accept="image/*,video/*">
                            <label class="custom-file-label" for="banner_${bannerIndex}">Choose file</label>
                            </div>
                        <small class="form-text text-muted">Supported formats: JPG, PNG, GIF, MP4 (Max: 10MB)</small>
                            </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="banner_title_${bannerIndex}">Banner Title</label>
                                <input type="text" class="form-control" name="banners[${bannerIndex}][title]" placeholder="Enter banner title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="banner_link_${bannerIndex}">Link URL</label>
                                <input type="url" class="form-control" name="banners[${bannerIndex}][link_url]" placeholder="https://example.com">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

                $('#bannerSection').append(newBanner);
            });

    // Remove banner
    $(document).on('click', '.remove-banner', function() {
                $(this).closest('.banner-item').remove();
        // Renumber remaining banners
        renumberBanners();
    });

    // Function to renumber banners
    function renumberBanners() {
        $('.banner-item').each(function(index) {
            var newIndex = index + 1;
            $(this).find('.card-header h6').text('Banner #' + newIndex);
            
            // Update input names and IDs
            var fileInput = $(this).find('input[type="file"]');
            var titleInput = $(this).find('input[name*="[title]"]');
            var linkInput = $(this).find('input[name*="[link_url]"]');
            
            fileInput.attr('id', 'banner_' + newIndex);
            fileInput.next('label').attr('for', 'banner_' + newIndex);
            fileInput.attr('name', 'banner_files[' + newIndex + ']');
            
            titleInput.attr('name', 'banners[' + newIndex + '][title]');
            titleInput.attr('id', 'banner_title_' + newIndex);
            
            linkInput.attr('name', 'banners[' + newIndex + '][link_url]');
            linkInput.attr('id', 'banner_link_' + newIndex);
        });
        // Update the counter
        bannerIndex = $('.banner-item').length;
    }

    // Sponsors management
    let sponsorIndex = 0;
    
    $('#addSponsorBtn').click(function() {
        sponsorIndex++;
        var newSponsor = `
            <div class="sponsor-item card mb-3">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Sponsor #${sponsorIndex}</h6>
                    <button type="button" class="btn btn-sm btn-outline-danger remove-sponsor">
                        <i class="fe fe-trash"></i>
                    </button>
                </div>
                <div class="card-body">
                                    <div class="form-group">
                        <label for="sponsor_logo_${sponsorIndex}">Sponsor Logo <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="sponsor_logo_${sponsorIndex}" name="sponsor_logos[${sponsorIndex}]" required accept="image/*">
                            <label class="custom-file-label" for="sponsor_logo_${sponsorIndex}">Choose file</label>
                                    </div>
                        <small class="form-text text-muted">Supported formats: JPG, PNG, GIF (Max: 2MB)</small>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                                    <div class="form-group">
                                <label for="sponsor_name_${sponsorIndex}">Sponsor Name</label>
                                <input type="text" class="form-control" name="sponsors[${sponsorIndex}][name]" placeholder="Enter sponsor name">
                                    </div>
                                </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sponsor_website_${sponsorIndex}">Website URL</label>
                                <input type="url" class="form-control" name="sponsors[${sponsorIndex}][website]" placeholder="https://example.com">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        $('#sponsorsSection').append(newSponsor);
    });

    // Remove sponsor
    $(document).on('click', '.remove-sponsor', function() {
        $(this).closest('.sponsor-item').remove();
        // Renumber remaining sponsors
        renumberSponsors();
    });

    // Function to renumber sponsors
    function renumberSponsors() {
        $('.sponsor-item').each(function(index) {
            var newIndex = index + 1;
            $(this).find('.card-header h6').text('Sponsor #' + newIndex);
            
            // Update input names and IDs
            var fileInput = $(this).find('input[type="file"]');
            var nameInput = $(this).find('input[name*="[name]"]');
            var websiteInput = $(this).find('input[name*="[website]"]');
            
            fileInput.attr('id', 'sponsor_logo_' + newIndex);
            fileInput.next('label').attr('for', 'sponsor_logo_' + newIndex);
            fileInput.attr('name', 'sponsor_logos[' + newIndex + ']');
            
            nameInput.attr('name', 'sponsors[' + newIndex + '][name]');
            nameInput.attr('id', 'sponsor_name_' + newIndex);
            
            websiteInput.attr('name', 'sponsors[' + newIndex + '][website]');
            websiteInput.attr('id', 'sponsor_website_' + newIndex);
        });
        // Update the counter
        sponsorIndex = $('.sponsor-item').length;
    }

    // Tabs management
    let tabIndex = 0;
    
    $('#addTabBtn').click(function() {
        tabIndex++;
        var newTab = `
            <div class="tab-item card mb-3">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Tab #${tabIndex}</h6>
                    <button type="button" class="btn btn-sm btn-outline-danger remove-tab">
                        <i class="fe fe-trash"></i>
                    </button>
                                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                                    <div class="form-group">
                                <label for="tab_title_${tabIndex}">Tab Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tabs[${tabIndex}][title]" placeholder="Enter tab title" required>
                                    </div>
                        </div>
                        <div class="col-md-6">
                                    <div class="form-group">
                                <label for="tab_content_${tabIndex}">Tab Content</label>
                                <textarea class="form-control" name="tabs[${tabIndex}][content]" rows="3" placeholder="Enter tab content"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        `;
        
        $('#tabsSection').append(newTab);
    });

    // Remove tab
    $(document).on('click', '.remove-tab', function() {
                $(this).closest('.tab-item').remove();
        // Renumber remaining tabs
        renumberTabs();
    });

    // Function to renumber tabs
    function renumberTabs() {
        $('.tab-item').each(function(index) {
            var newIndex = index + 1;
            $(this).find('.card-header h6').text('Tab #' + newIndex);
            
            // Update input names and IDs
            var titleInput = $(this).find('input[name*="[title]"]');
            var contentInput = $(this).find('textarea[name*="[content]"]');
            
            titleInput.attr('name', 'tabs[' + newIndex + '][title]');
            titleInput.attr('id', 'tab_title_' + newIndex);
            
            contentInput.attr('name', 'tabs[' + newIndex + '][content]');
            contentInput.attr('id', 'tab_content_' + newIndex);
        });
        // Update the counter
        tabIndex = $('.tab-item').length;
    }

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
        
        // Check password confirmation
        var password = $('#password').val();
        var confirmPassword = $('#password-confirm').val();
        
        if (password !== confirmPassword) {
            $('#password-confirm').addClass('is-invalid');
            isValid = false;
        } else {
            $('#password-confirm').removeClass('is-invalid');
        }
        
        return isValid;
    });

    // Handle file input labels for all file inputs (including dynamic ones)
    $(document).on('change', '.custom-file-input', function() {
        var fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').html(fileName || 'Choose file');
    });

    // Handle file input labels for existing file inputs
    $('.custom-file-input').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').html(fileName || 'Choose file');
            });
        });
    </script>
@endsection


