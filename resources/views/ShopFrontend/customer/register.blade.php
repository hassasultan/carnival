@extends('ShopFrontend.Layouts.layout')

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
                <li class="active"> Register</li>
            </ol><!-- Block  Breadcrumb-->

            <h2 class="page-heading">
                <span class="page-heading-title2"> Register</span>
            </h2>

            <div class="page-content checkout-page">
                <div class="box-border">
                    <h4>Register</h4>
                    <p>Already registered? Please log in below:</p>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <form method="POST" action="{{ route('register') }}" class="col-lg-8 col-md-10 col-12 mx-auto"
                                enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <input type="hidden" name="role_id" value="4">
                                <div class="card-body">
                                    <h2 class="mb-3">User Details</h2>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstname">Firstname <span class="text-danger">*</span></label>
                                            <input id="firstname" type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" value="{{ old('first_name') }}" required
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
                                                name="last_name" value="{{ old('last_name') }}" required
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
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="password">Password <span class="text-danger">*</span></label>
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
                                        class="btn btn-lg btn-primary btn-block">{{ __('Register') }}</button>
                                    <p class="mt-5 mb-3 text-muted">Already have an account? <a
                                            href="{{ route('customer.login') }}">Login</a></p>
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
