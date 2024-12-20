@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="card">
        <form method="POST" action="{{ route('vendor.subvendor.register') }}" class="col-lg-8 col-md-10 col-12 mx-auto"
            enctype="multipart/form-data">
            @csrf
            {{ dd(Auth::user()->vendor->id) }}
            <input type="hidden" name="vendor_id" value="{{ Auth::user()->vendor->id }}">
            <input type="hidden" name="package_id" value="section_leader">
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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
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
                    {{-- <div class="form-group col-md-12">
                        <label for="banner">Banner <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input select2" id="banner" name="banner[]" multiple>
                            <label class="custom-file-label" for="banner" id="banner_label">Choose file</label>
                        </div>
                    </div> --}}
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
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                            name="city" value="{{ old('city') }}" autocomplete="city">
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state">State <span class="text-danger">*</span></label>
                        <input id="state" type="text" class="form-control @error('state') is-invalid @enderror"
                            name="state" value="{{ old('state') }}" autocomplete="state">
                        @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country">Country <span class="text-danger">*</span></label>
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
                        <label for="zipcode">Zipcode <span class="text-danger">*</span></label>
                        <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror"
                            name="zipcode" value="{{ old('zipcode') }}" autocomplete="zipcode">
                        @error('zipcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 packages-div">
                        <div class="form-group list-group mb-3 mt-3 shadow" id="ecommerce-box">
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
                        <div class="form-group list-group mb-3 mt-3 shadow" id="music-box">
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
                        <div class="form-group list-group mb-3 mt-3 shadow" id="appointment-box">
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
                        <div class="form-group list-group mb-3 mt-3 shadow" id="events-box">
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
                        <div class="form-group list-group mb-3 mt-3 shadow" id="ad_space-box">
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
                        <div class="form-group list-group mb-3 mt-3 shadow" id="blogging-box">
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
                </div>

                <div id="bannerSection">
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
                </div>

                <!-- Button to add more banners -->
                <div class="form-group col-md-12">
                    <button type="button" id="addBannerBtn" class="btn btn-success">+ Add Another Banner</button>
                </div>

                <h2 class="mt-5 mb-3">Shop Details</h2>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="shop_name">Name <span class="text-danger">*</span></label>
                        <input id="shop_name" type="text"
                            class="form-control @error('shop_name') is-invalid @enderror" name="shop_name"
                            value="{{ old('shop_name') }}" required autocomplete="shop_name">
                        @error('shop_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="shop_email">Email <span class="text-danger">*</span></label>
                        <input id="shop_email" type="shop_email"
                            class="form-control @error('shop_email') is-invalid @enderror" name="shop_email"
                            value="{{ old('shop_email') }}" required autocomplete="shop_email">
                        @error('shop_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="shop_address">Address <span class="text-danger">*</span></label>
                        <input id="shop_address" type="text"
                            class="form-control @error('shop_address') is-invalid @enderror" name="shop_address"
                            value="{{ old('shop_address') }}" required autocomplete="shop_address">
                        @error('shop_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="shop_phone">Phone <span class="text-danger">*</span></label>
                        <input id="shop_phone" type="text"
                            class="form-control @error('shop_phone') is-invalid @enderror" name="shop_phone"
                            value="{{ old('shop_phone') }}" required autocomplete="shop_phone">
                        @error('shop_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="logo">Logo</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="logo" name="logo">
                            <label class="custom-file-label" for="logo" id="logo_label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="shop_insta">Instagram</label>
                        <input id="shop_insta" type="text"
                            class="form-control @error('shop_insta') is-invalid @enderror" name="shop_insta"
                            value="{{ old('shop_insta') }}" autocomplete="shop_insta">
                        @error('shop_insta')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="shop_facebook">Facebook</label>
                        <input id="shop_facebook" type="text"
                            class="form-control @error('shop_facebook') is-invalid @enderror" name="shop_facebook"
                            value="{{ old('shop_facebook') }}" autocomplete="shop_facebook">
                        @error('shop_facebook')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="shop_youtube">Youtube</label>
                        <input id="shop_youtube" type="text"
                            class="form-control @error('shop_youtube') is-invalid @enderror" name="shop_youtube"
                            value="{{ old('shop_youtube') }}" autocomplete="shop_youtube">
                        @error('shop_youtube')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="shop_twitter">Twitter</label>
                        <input id="shop_twitter" type="text"
                            class="form-control @error('shop_twitter') is-invalid @enderror" name="shop_twitter"
                            value="{{ old('shop_twitter') }}" autocomplete="shop_twitter">
                        @error('shop_twitter')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="shop_tiktok">Tiktok</label>
                        <input id="shop_tiktok" type="text"
                            class="form-control @error('shop_tiktok') is-invalid @enderror" name="shop_tiktok"
                            value="{{ old('shop_tiktok') }}" autocomplete="shop_tiktok">
                        @error('shop_tiktok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="shop_wa_business_page">WS Business Page</label>
                        <input id="shop_wa_business_page" type="text"
                            class="form-control @error('shop_wa_business_page') is-invalid @enderror"
                            name="shop_wa_business_page" value="{{ old('shop_wa_business_page') }}"
                            autocomplete="shop_wa_business_page">
                        @error('shop_wa_business_page')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="shop_linkedin">LinkedIn</label>
                        <input id="shop_linkedin" type="text"
                            class="form-control @error('shop_linkedin') is-invalid @enderror" name="shop_linkedin"
                            value="{{ old('shop_linkedin') }}" autocomplete="shop_linkedin">
                        @error('shop_linkedin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="continent">Region <span class="text-danger">*</span></label>
                        <select id="continent" class="form-control @error('continent') is-invalid @enderror"
                            name="continent" required>
                            <option value="" disabled selected>Select Region</option>
                            @foreach ($continents as $continent)
                                <option value="{{ $continent->id }}">{{ $continent->name }}</option>
                            @endforeach
                        </select>
                        @error('continent')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Register') }}</button>
        </form>
    </div>
@endsection

@section('bottom_script')
    <script>
        $(document).ready(function() {

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
        });
    </script>
@endsection
