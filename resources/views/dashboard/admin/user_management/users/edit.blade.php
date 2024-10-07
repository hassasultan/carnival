@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="card">
        <form method="POST" action="{{ route('users.update', $user->id) }}" class="col-lg-8 col-md-10 col-12 mx-auto"
            enctype="multipart/form-data">
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
                        <input id="city" type="text" class="form-control" name="city"
                            value="{{ $user->city }}" autocomplete="city">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state">State</label>
                        <input id="state" type="text" class="form-control" name="state"
                            value="{{ $user->state }}" autocomplete="state">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country">Country</label>
                        <input id="country" type="text" class="form-control" name="country"
                            value="{{ $user->country }}" autocomplete="country">
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
                                <option value="{{ $package->id }}"
                                    {{ $user->vendor->package_id == $package->id ? 'selected' : '' }}>
                                    {{ $package->title }}</option>
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
                                <option value="{{ $vendor->id }}"
                                    {{ $user->subVendor->vendor_id == $vendor->id ? 'selected' : '' }}>
                                    {{ $vendor->user->first_name . ' ' . $vendor->user->last_name }}</option>
                            @endforeach
                        </select>
                        @error('vendor_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                @endif
                <div class="form-group">
                    <label for="continent">Region <span class="text-danger">*</span></label>
                    <select id="continent" class="form-control @error('continent') is-invalid @enderror" name="continent"
                        required>
                        <option value="" disabled selected>Select Region</option>
                        @foreach ($continents as $continent)
                            <option value="{{ $continent->id }}" @if (
                                ($user->vendor && $user->vendor->continent == $continent->id) ||
                                    ($user->subvendor && $user->subvendor->continent == $continent->id)) selected @endif>
                                {{ $continent->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('continent')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
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
                        <div class="form-group list-group mb-3 mt-3 shadow" id="ecommerce-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">E-Commerce</strong>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="e_com" name="ecommerce" @if(($user->vendor && $user->vendor->ecommerce == 1) || ($user->subVendor && $user->subVendor->ecommerce == 1)) checked @endif>
                                            <label class="custom-control-label" for="e_com"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow" id="music-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Music Upload</strong>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="music" name="music" @if(($user->vendor && $user->vendor->music == 1) || ($user->subVendor && $user->subVendor->music == 1)) checked @endif>
                                            <label class="custom-control-label" for="music"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow" id="appointment-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Appointments</strong>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="appointments" name="appointment" @if(($user->vendor && $user->vendor->appointment == 1) || ($user->subVendor && $user->subVendor->appointment == 1)) checked @endif>
                                            <label class="custom-control-label" for="appointments"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 packages-div">
                        <div class="form-group list-group mb-3 mt-3 shadow" id="events-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Events</strong>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="events" name="events" @if(($user->vendor && $user->vendor->events == 1) || ($user->subVendor && $user->subVendor->events == 1)) checked @endif>
                                            <label class="custom-control-label" for="events"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow" id="ad_space-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Ads</strong>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="ads" name="ad_space" @if(($user->vendor && $user->vendor->ad_space == 1) || ($user->subVendor && $user->subVendor->ad_space == 1)) checked @endif>
                                            <label class="custom-control-label" for="ads"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group list-group mb-3 mt-3 shadow" id="blogging-box">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Blogs</strong>
                                    </div>
                                    <div class="col-auto">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" value="1"
                                                id="blogs" name="blogging" @if(($user->vendor && $user->vendor->blogging == 1) || ($user->subVendor && $user->subVendor->blogging == 1)) checked @endif>
                                            <label class="custom-control-label" for="blogs"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div id="bannerSection">
                    <div class="form-group col-md-12 banner-item">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5>Banner</h5>
                            </div>
                            <div class="card-body" style="padding: 15px; background-color: #646363;">
                                <label for="banner">Banner <span class="text-danger">*</span></label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="banner" name="banner[]"
                                        required>
                                    <label class="custom-file-label" for="banner">Choose file</label>
                                </div>

                                <!-- Details for the banner -->
                                <div class="banner-details">
                                    <div class="form-group">
                                        <label for="banner_title">Title</label>
                                        <input type="text" class="form-control" name="banner_title[]"
                                            placeholder="Banner Title" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="banner_subtitle">Subtitle</label>
                                        <input type="text" class="form-control" name="banner_subtitle[]"
                                            placeholder="Banner Subtitle" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="banner_description">Description</label>
                                        <textarea class="form-control" name="banner_description[]" rows="3" placeholder="Banner Description" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="banner_button">Button Text</label>
                                        <input type="text" class="form-control" name="banner_button[]"
                                            placeholder="Button Text" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div id="bannerSection">
                    <!-- Show previously uploaded banners -->
                    <div class="form-group col-md-12">
                        <h5>Uploaded Banners</h5>
                        <div class="row">
                            @foreach ($user->banners as $banner)
                                <div class="col-md-3 mb-3 banner-item existing-banner-item">
                                    <div class="card">
                                        <img src="{{ asset($banner->banner) }}" class="card-img-top" alt="Banner"
                                            style="height: 150px; object-fit: cover;">
                                        <div class="card-body text-center">
                                            <button type="button" class="btn btn-danger delete-banner"
                                                data-id="{{ $banner->id }}">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <!-- Button to add more banners -->
                <div class="form-group col-md-12">
                    <button type="button" id="addBannerBtn" class="btn btn-success">+ Add Another Banner</button>
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

        $(document).on('change', '.custom-file-input', function() {
            var files = $(this)[0].files;
            var fileNames = '';
            for (var i = 0; i < files.length; i++) {
                fileNames += files[i].name;
                if (i < files.length - 1) {
                    fileNames += ', ';
                }
            }
            // Update the label text
            $(this).siblings('.custom-file-label').text(fileNames);
        });

        $(document).ready(function() {
            // Add new banner row
            $('#addBannerBtn').click(function() {
                let newBanner = `
            <div class="form-group col-md-12 banner-item">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5>Banner</h5>
                    </div>
                    <div class="card-body" style="padding: 15px; background-color: #646363;">
                        <label for="banner">Banner <span class="text-danger">*</span></label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="banner[]" required>
                            <label class="custom-file-label">Choose file</label>
                        </div>

                        <div class="banner-details">
                            <div class="form-group">
                                <label for="banner_title">Title</label>
                                <input type="text" class="form-control" name="banner_title[]" placeholder="Banner Title" required>
                            </div>

                            <div class="form-group">
                                <label for="banner_subtitle">Subtitle</label>
                                <input type="text" class="form-control" name="banner_subtitle[]" placeholder="Banner Subtitle" required>
                            </div>

                            <div class="form-group">
                                <label for="banner_description">Description</label>
                                <textarea class="form-control" name="banner_description[]" rows="3" placeholder="Banner Description" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="banner_button">Button Text</label>
                                <input type="text" class="form-control" name="banner_button[]" placeholder="Button Text" required>
                            </div>
                        </div>

                        <button type="button" class="btn btn-danger remove-banner-btn">Remove Banner</button>
                    </div>
                </div>
            </div>`;

                $('#bannerSection').append(newBanner);
            });

            // Remove a banner row
            $(document).on('click', '.remove-banner-btn', function() {
                $(this).closest('.banner-item').remove();
            });

            $('.delete-banner').click(function() {
                var bannerId = $(this).data('id');
                var button = $(this);

                $.ajax({
                    url: '{{ route('banners.delete') }}',
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: bannerId
                    },
                    success: function(response) {
                        if (response.success) {
                            button.closest('.existing-banner-item').remove();
                        } else {
                            alert('Could not delete the banner. Please try again.');
                        }
                    }
                });
            });
        });
    </script>
@endsection
