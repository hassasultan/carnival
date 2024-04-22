@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="card">
        <form method="POST" action="{{ route('users.register') }}" class="col-lg-8 col-md-10 col-12 mx-auto">
            @csrf
            <div class="mx-auto text-center my-4 card-header">
                <h2 class="my-3">Register New User</h2>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Firstname</label>
                        <input id="firstname" type="text" class="form-control @error('first_name') is-invalid @enderror"
                            name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input id="lastname" type="text" class="form-control @error('last_name') is-invalid @enderror"
                            name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
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
                        name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                        name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                        name="address" value="{{ old('address') }}" autocomplete="address">
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="city">City</label>
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                            name="city" value="{{ old('city') }}" autocomplete="city">
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state">State</label>
                        <input id="state" type="text" class="form-control @error('state') is-invalid @enderror"
                            name="state" value="{{ old('state') }}" autocomplete="state">
                        @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country">Country</label>
                        <input id="country" type="text" class="form-control @error('country') is-invalid @enderror"
                            name="country" value="{{ old('country') }}" autocomplete="country">
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="zipcode">Zipcode</label>
                        <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror"
                            name="zipcode" value="{{ old('zipcode') }}" autocomplete="zipcode">
                        @error('zipcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="role">Role</label>
                        <select id="role" class="form-control @error('role_id') is-invalid @enderror"
                            name="role_id" required>
                            <option value="">Select Role</option>
                            @foreach ($roles as $role)
                                @if ($role->name !== 'Admin')
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group" id="package_input" style="display: none;">
                    <label for="package">Package</label>
                    <select id="package" class="form-control @error('package_id') is-invalid @enderror"
                        name="package_id">
                        <option value="">Select Package</option>
                        @foreach ($packages as $package)
                            <option value="{{ $package->id }}">{{ $package->title }}</option>
                        @endforeach
                    </select>
                    @error('package_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group" id="vendors_input" style="display: none;">
                    <label for="vendor">Vendors</label>
                    <select id="vendor" class="form-control @error('vendor_id') is-invalid @enderror"
                        name="vendor_id">
                        <option value="">Select vendor</option>
                        @foreach ($vendors as $vendor)
                            <option value="{{ $vendor->id }}">
                                {{ $vendor->user->first_name . ' ' . $vendor->user->last_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('vendor_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- <div class="form-group" id="category_input" style="display: none;">
                    <label for="category_id">Category</label>
                    <select id="category_id" name="category_id" class="form-control" required>
                        <option value="">Select Category</option>
                    </select>
                </div> --}}
                <div class="form-row">
                    <div class="col-md-6 packages-div">
                        <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="ecommerce-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">E-Commerce</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1" id="e_com"
                                                name="ecommerce">
                                            <label class="custom-control-label" for="e_com"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="music-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Music Upload</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1" id="music"
                                                name="music">
                                            <label class="custom-control-label" for="music"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="appointment-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Appointments</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1" id="appointments"
                                                name="appointment">
                                            <label class="custom-control-label" for="appointments"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                    </div>
                    <div class="col-md-6 packages-div">
                        <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="events-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Events</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1" id="events"
                                                name="events">
                                            <label class="custom-control-label" for="events"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="ad_space-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Ads</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1" id="ads"
                                                name="ad_space">
                                            <label class="custom-control-label" for="ads"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="blogging-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Blogs</strong>
                                    </div> <!-- .col -->
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1" id="blogs"
                                                name="blogging">
                                            <label class="custom-control-label" for="blogs"></label>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .list-group-item -->
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Register') }}</button>
        </form>
    </div>
@endsection

@section('bottom_script')
    <script>
        $(document).ready(function() {

            $('#role').on('change', function() {
                var role = $(this).val();
                console.log(role);
                if (role == 2) {
                    $('#package_input').show();
                    $('#vendors_input').hide();
                    $('.packages-div').hide();
                } else if (role == 3) {
                    $('#package_input').hide();
                    $('#vendors_input').show();
                    $('.packages-div').show();
                } else {
                    $('#package_input').hide();
                    $('#vendors_input').hide();
                    $('.packages-div').hide();
                }
            });

            // $('#package').on('change', function() {
            //     var packageId = $(this).val();
            //     $('#category_id').empty().append($('<option>', {
            //         value: '',
            //         text: 'Select Category'
            //     }));
            //     if (packageId) {
            //         $.ajax({
            //             type: 'GET',
            //             url: `{{ route('users.get.categories') }}`,
            //             data: {
            //                 package: packageId,
            //                 role: $('#role').val(),
            //             },
            //             success: function(response) {
            //                 populateCategories(response);
            //             },
            //             error: function(xhr, status, error) {
            //                 console.error(xhr.responseText);
            //             }
            //         });
            //     }
            // });

            // $('#vendor').on('change', function() {
            //     var vendor = $(this).val();
            //     $.ajax({
            //         type: 'GET',
            //         url: '{{ route('get.single.user', ':id') }}'.replace(':id', vendor),
            //         data: {
            //             vendor: vendor,
            //         },
            //         success: function(response) {
            //             console.log('response', response.vendor);
            //             console.log('package', response['vendor']['package']);
            //             if (response['vendor']['package']['ecommerce'] == 'true') {
            //                 console.log('ecommerce');
            //                 $('#ecommerce-box').prop('checked', true).closest('.list-group').show();
            //             } else {
            //                 $('#ecommerce-box').prop('checked', false).closest('.list-group').hide();
            //             }
            //             if (response['vendor']['package']['events'] == 'true') {
            //                 console.log('events');
            //                 $('#events-box').prop('checked', true).closest('.list-group').show();
            //             } else {
            //                 $('#events-box').prop('checked', false).closest('.list-group').hide();
            //             }
            //             if (response['vendor']['package']['music'] == 'true') {
            //                 console.log('music');
            //                 $('#music-box').prop('checked', true).closest('.list-group').show();
            //             } else {
            //                 $('#music-box').prop('checked', false).closest('.list-group').hide();
            //             }
            //             if (response['vendor']['package']['appointment'] == 'true') {
            //                 console.log('appointment');
            //                 $('#appointment-box').prop('checked', true).closest('.list-group')
            //                     .show();
            //             } else {
            //                 $('#appointment-box').prop('checked', false).closest('.list-group')
            //                     .hide();
            //             }
            //             if (response['vendor']['package']['ad_space'] == 'true') {
            //                 console.log('ad_space');
            //                 $('#ad_space-box').prop('checked', true).closest('.list-group').show();
            //             } else {
            //                 $('#ad_space-box').prop('checked', false).closest('.list-group').hide();
            //             }
            //             if (response['vendor']['package']['blogging'] == 'true') {
            //                 console.log('blogging');
            //                 $('#blogging-box').prop('checked', true).closest('.list-group').show();
            //             } else {
            //                 $('#blogging-box').prop('checked', false).closest('.list-group').hide();
            //             }
            //         },
            //         error: function(xhr, status, error) {
            //             console.error(xhr.responseText);
            //         }
            //     });
            // });

            $('#vendor').on('change', function() {
                var vendor = $(this).val();
                $('#ecommerce-box').hide();
                $('#music-box').hide();
                $('#appointment-box').hide();
                $('#events-box').hide();
                $('#ad_space-box').hide();
                $('#blogging-box').hide();

                $.ajax({
                    type: 'GET',
                    url: '{{ route('get.single.user', ':id') }}'.replace(':id', vendor),
                    data: {
                        vendor: vendor,
                    },
                    success: function(response) {
                        
                        $.each(response['vendor']['package'], function(feature, value) {
                            var checkbox = $('#' + feature +
                                '-box input[type="checkbox"]');
                            var listGroup = $('#' + feature + '-box');

                            
                            checkbox.prop('checked', value === 'true');
                            listGroup.toggle(value === 'true');
                        });

                        
                        repositionDivs();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            
            function repositionDivs() {
                
                var visibleDivs = $('.form-group.list-group:visible');
                
                var halfLength = Math.ceil(visibleDivs.length / 2);

                $('.packages-div').empty();
                
                for (var i = 0; i < halfLength; i++) {
                    var divA = visibleDivs.eq(i);
                    var divB = visibleDivs.eq(i + halfLength);
                    
                    $('.packages-div').eq(0).append(divA);
                    $('.packages-div').eq(1).append(divB);
                }
            }

            // function populateCategories(categories) {
            //     var categoryDropdown = $('#category_id');
            //     categories.forEach(function(category) {
            //         categoryDropdown.append($('<option>', {
            //             value: category.id,
            //             text: category.title
            //         }));
            //     });
            //     $('#category_input').show();
            // }
        });
    </script>
@endsection
