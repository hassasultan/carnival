@extends('auth.layouts.app')

@section('content')
    <form method="POST" action="{{ route('register') }}" class="col-lg-8 col-md-10 col-12 mx-auto"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="package_id" value="6" hidden>
        <input type="hidden" name="unique_id" value="{{ $unique_id }}" hidden>
        <div class="mx-auto text-center my-4 card-header">
            <h2 class="my-3">Register New User</h2>
        </div>
        <div class="card-body">
            <h2 class="mb-3">User Details</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">Firstname <span class="text-danger">*</span></label>
                    <input id="firstname" type="text" class="form-control @error('first_name') is-invalid @enderror"
                        name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Lastname <span class="text-danger">*</span></label>
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
                <label for="email">Email Address <span class="text-danger">*</span></label>
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
                    <label for="password">Password <span class="text-danger">*</span></label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="password-confirm">Confirm Password <span class="text-danger">*</span></label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                        autocomplete="new-password">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="image">Image <span class="text-danger">*</span></label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" required>
                        <label class="custom-file-label" for="image" id="image_label">Choose file</label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone <span class="text-danger">*</span></label>
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                        name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address <span class="text-danger">*</span></label>
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
                    <label for="city">City <span class="text-danger">*</span></label>
                    {{-- <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                        name="city" value="{{ old('city') }}" autocomplete="city"> --}}
                    <select class="form-control @error('city') is-invalid @enderror" name="city" id="">
                        <option value="">Select</option>
                        @foreach ($city as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="state">State <span class="text-danger">*</span></label>
                    {{-- <input id="state" type="text" class="form-control @error('state') is-invalid @enderror"
                        name="state" value="{{ old('state') }}" autocomplete="state"> --}}
                    <select class="form-control @error('state') is-invalid @enderror" name="state" id="">
                        <option value="">Select</option>
                        @foreach ($state as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="country">Country <span class="text-danger">*</span></label>
                    {{-- <input id="country" type="text" class="form-control @error('country') is-invalid @enderror"
                        name="country" value="{{ old('country') }}" autocomplete="country"> --}}
                    <select class="form-control @error('country') is-invalid @enderror" name="country" id="">
                        <option value="">Select</option>
                        @foreach ($country as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="zipcode">Zipcode <span class="text-danger">*</span></label>
                    <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror"
                        name="zipcode" value="{{ old('zipcode') }}" autocomplete="zipcode">
                    @error('zipcode')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- <div class="form-group col-md-6">
                    <label for="package">Package <span class="text-danger">*</span></label>
                    <select id="package" class="form-control @error('package_id') is-invalid @enderror"
                        name="package_id" required>
                        <option value="">Select Package</option>
                        @foreach ($packages as $package)
                            @if ($package->title != 'Carnival Committees')
                                <option value="{{ $package->id }}">{{ $package->title }}</option>
                            @endif
                        @endforeach
                        <option value="section_leader">Section Leader</option>
                    </select>
                    @error('package_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> --}}
            </div>
            {{-- <div class="form-group" id="vendors_input">
                <label for="vendor">Vendors</label>
                <select id="vendor" class="form-control @error('vendor_id') is-invalid @enderror" name="vendor_id">
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
            <div class="form-row">
                <div class="col-md-6 packages-div">
                    <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="ecommerce-box">
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong class="mb-2">E-Commerce</strong>
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
                    <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="music-box">
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong class="mb-2">Music Upload</strong>
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
                    <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="appointment-box">
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong class="mb-2">Appointments</strong>
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
                <div class="col-md-6 packages-div">
                    <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="events-box">
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong class="mb-2">Events</strong>
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
                    <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="ad_space-box">
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong class="mb-2">Ads</strong>
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
                    <div class="form-group list-group mb-3 mt-3 shadow" style="display: none;" id="blogging-box">
                        <div class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col">
                                    <strong class="mb-2">Blogs</strong>
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
            </div> --}}
            <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Register') }}</button>
        </div>
    </form>
@endsection

@section('bottom_script')
    <script>
        $(document).ready(function() {
            $('#package').on('change', function() {
                var packageId = $(this).val();
                if (packageId == 'section_leader') {
                    $('#vendors_input').show();

                    $('#ecommerce-box').hide();
                    $('#music-box').hide();
                    $('#appointment-box').hide();
                    $('#events-box').hide();
                    $('#ad_space-box').hide();
                    $('#blogging-box').hide();
                } else {

                    $('#vendors_input').hide();
                    $('#ecommerce-box').hide();
                    $('#music-box').hide();
                    $('#appointment-box').hide();
                    $('#events-box').hide();
                    $('#ad_space-box').hide();
                    $('#blogging-box').hide();
                }
            });

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
                        console.log('response-response', response);

                        $.each(response['vendor']['package'], function(feature, value) {
                            var checkbox = $('#' + feature +
                                '-box input[type="checkbox"]');
                            var listGroup = $('#' + feature + '-box');


                            checkbox.prop('checked', value === 'true');
                            listGroup.toggle(value === 'true');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            // Update label text when files are selected for additional images
            $('#image').on('change', function() {
                var files = $(this)[0].files;
                var fileNames = '';
                for (var i = 0; i < files.length; i++) {
                    fileNames += files[i].name;
                    if (i < files.length - 1) {
                        fileNames += ', ';
                    }
                }
                $('#image_label').text(fileNames);
            });
        });
    </script>
@endsection
