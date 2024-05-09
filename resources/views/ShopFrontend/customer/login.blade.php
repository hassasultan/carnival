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
                <li class="active"> Login</li>
            </ol><!-- Block  Breadcrumb-->

            <h2 class="page-heading">
                <span class="page-heading-title2"> Login</span>
            </h2>

            <div class="page-content checkout-page">
                <div class="box-border">
                    <h4>Login</h4>
                    <form method="POST" action="{{ route('login') }}" class="col-lg-8 col-md-8 col-10 mx-auto text-center">
                        @csrf
                        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                            <svg version="1.1" id="logo" class="navbar-brand-img brand-md"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 120 120" xml:space="preserve">
                                <g>
                                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                                </g>
                            </svg>
                        </a>
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="email" id="inputEmail"
                                class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" placeholder="Email address" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword"
                                class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
                                placeholder="Password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}> Stay logged in
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
                        <p class="mt-5 mb-3 text-muted">Dont have an account? <a
                                href="{{ route('customer.register') }}">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </main><!-- end MAIN -->
@endsection

@section('script')
@endsection
