@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="card">
        <form method="POST" action="{{ route('users.update', $user->id) }}" class="col-lg-8 col-md-10 col-12 mx-auto">
            @csrf
            @method('PUT')
            <div class="mx-auto text-center my-4 card-header">
                <h2 class="my-3">Edit User</h2>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <input type="hidden" name="role_id" value="{{ $user->role_id }}">
                    <div class="form-group col-md-6">
                        <label for="firstname">Firstname</label>
                        <input id="firstname" type="text" class="form-control @error('first_name') is-invalid @enderror"
                            name="first_name" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus>
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input id="lastname" type="text" class="form-control @error('last_name') is-invalid @enderror"
                            name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ $user->email }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                        name="phone" value="{{ $user->phone }}" required autocomplete="phone">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                        name="address" value="{{ $user->address }}" autocomplete="address">
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="city">City</label>
                        <input id="city" type="text" class="form-control" name="city" value="{{ $user->city }}"
                            autocomplete="city">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state">State</label>
                        <input id="state" type="text" class="form-control" name="state" value="{{ $user->state }}"
                            autocomplete="state">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country">Country</label>
                        <input id="country" type="text" class="form-control" name="country" value="{{ $user->country }}"
                            autocomplete="country">
                    </div>
                </div>
                <div class="form-group">
                    <label for="zipcode">Zipcode</label>
                    <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{ $user->zipcode }}"
                        autocomplete="zipcode">
                </div>

                <!-- Role Specific Fields -->
                @if ($user->isAdmin())
                    <!-- Admin specific fields can be added here if any -->
                @elseif ($user->isVendor())
                    <div class="form-group">
                        <label for="package">Package</label>
                        <select id="package" class="form-control @error('package_id') is-invalid @enderror"
                            name="package_id">
                            <option value="">Select Package</option>
                            @foreach ($packages as $package)
                                <option value="{{ $package->id }}" {{ $user->vendor->package_id == $package->id ? 'selected' : '' }}>{{ $package->title }}</option>
                            @endforeach
                        </select>
                        @error('package_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                @elseif ($user->isSubVendor())
                    <div class="form-group">
                        <label for="vendor">Vendor</label>
                        <select id="vendor" class="form-control @error('vendor_id') is-invalid @enderror"
                            name="vendor_id">
                            <option value="">Select Vendor</option>
                            @foreach ($vendors as $vendor)
                                <option value="{{ $vendor->id }}" {{ $user->subVendor->vendor_id == $vendor->id ? 'selected' : '' }}>{{ $vendor->user->first_name . ' ' . $vendor->user->last_name }}</option>
                            @endforeach
                        </select>
                        @error('vendor_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                @endif
                <!-- End of Role Specific Fields -->

                <!-- Status Field -->
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" class="form-control @error('status') is-invalid @enderror" name="status">
                        <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group list-group mb-3 mt-3 shadow">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">E-Commerce</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" {{ $user->e_com == 1 ? 'checked' : '' }} class="custom-control-input" id="e_com" name="e_com">
                                            <label class="custom-control-label" for="e_com"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Music Upload</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" {{ $user->music == 1 ? 'checked' : '' }} class="custom-control-input" id="music" name="music">
                                            <label class="custom-control-label" for="music"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Appointments</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" {{ $user->appointments == 1 ? 'checked' : '' }} class="custom-control-input" id="appointments" name="appointments">
                                            <label class="custom-control-label" for="appointments"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group list-group mb-3 mt-3 shadow">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Events</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" {{ $user->events == 1 ? 'checked' : '' }} class="custom-control-input" id="events" name="events">
                                            <label class="custom-control-label" for="events"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Ads</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" {{ $user->ads == 1 ? 'checked' : '' }} class="custom-control-input" id="ads" name="ads">
                                            <label class="custom-control-label" for="ads"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Blogs</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" {{ $user->blogs == 1 ? 'checked' : '' }} class="custom-control-input" id="blogs" name="blogs">
                                            <label class="custom-control-label" for="blogs"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Update') }}</button>
        </form>
    </div>
@endsection


@section('bottom_script')
    <script>
        $(document).ready(function() {
            var userRole = {{ $user->role_id }};
            if (userRole == 2) {
                $('#package_input').show();
                $('#vendors_input').hide();
            } else if (userRole == 3) {
                $('#package_input').hide();
                $('#vendors_input').show();
            } else {
                $('#package_input').hide();
                $('#vendors_input').hide();
            }

            $('#role').on('change', function() {
                var role = $(this).val();
                if (role == 2) {
                    $('#package_input').show();
                    $('#vendors_input').hide();
                } else if (role == 3) {
                    $('#package_input').hide();
                    $('#vendors_input').show();
                } else {
                    $('#package_input').hide();
                    $('#vendors_input').hide();
                }
            });

            $('#package').on('change', function() {
                var packageId = $(this).val();
                $('#category_id').empty().append($('<option>', {
                    value: '',
                    text: 'Select Category'
                }));
                if (packageId) {
                    $.ajax({
                        type: 'GET',
                        url: `{{ route('users.get.categories') }}`,
                        data: {
                            package: packageId,
                            role: $('#role').val(),
                        },
                        success: function(response) {
                            populateCategories(response);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });

            $('#vendor').on('change', function() {
                var vendor = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: `{{ route('users.get.categories') }}`,
                    data: {
                        vendor: vendor,
                    },
                    success: function(response) {
                        populateCategories(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            function populateCategories(categories) {
                var categoryDropdown = $('#category_id');
                categories.forEach(function(category) {
                    categoryDropdown.append($('<option>', {
                        value: category.id,
                        text: category.title
                    }));
                });
                $('#category_input').show();
            }
        });
    </script>
@endsection
