@extends('ShopFrontend.customer.Layouts.layout')

@section('title')
    User Login
@endsection

@section('main')
    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li class="active"> My Profile</li>
            </ol><!-- Block  Breadcrumb-->

            <h2 class="page-heading">
                <span class="page-heading-title2">My Profile</span>
            </h2>

            <div class="page-content checkout-page">
                <div class="box-border">
                    {{-- <h4>My Profile</h4> --}}
                    <div class="form-row">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="form-group col-md-10">
                            {{-- <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input class="form-control input" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name</label>
                                    <input class="form-control input" type="text">
                                </div>
                            </div>
                            <label>Email address</label>
                            <input class="form-control input" type="email">
                            <label>Password</label>
                            <input class="form-control input" type="password">
                            <p><a href="#">Forgot your password?</a></p>
                            <button class="button">Register</button> --}}
                            <form method="POST" action="{{ route('users.profile.update') }}"
                                class="col-lg-8 col-md-10 col-12 mx-auto" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <div class="card-body">
                                    {{-- <h2 class="mb-3">User Details</h2> --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstname">Firstname <span class="text-danger">*</span></label>
                                            <input id="firstname" type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" value="{{ $user->first_name }}" required
                                                autocomplete="first_name" autofocus>
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lastname">Lastname <span class="text-danger">*</span></label>
                                            <input id="lastname" type="text"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" value="{{ $user->last_name }}" required
                                                autocomplete="last_name">
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input id="email" type="email" readonly
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $user->email }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="password">New Password <span class="text-danger">*</span></label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="password-confirm">Confirm Password <span
                                                    class="text-danger">*</span></label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="btn btn-lg btn-primary btn-block">{{ __('Update') }}</button>
                            </form>
                        </div>
                        {{-- <div class="form-group col-md-6">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </main><!-- end MAIN -->
@endsection

@section('script')
@endsection
