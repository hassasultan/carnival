@extends('ShopFrontend.Layouts.layout')

@section('title')
    Home
@endsection

@section('body_classes')
    cms-index-index index-opt-3
@endsection

@section('main')
    <main class="site-main">

        <div class="columns container">
            <ol class="breadcrumb no-hide">
                <li><a href="#">Mascamps</a></li>
                <li class="active">{{ $vendor->name }}</li>
            </ol>

            <h2 class="page-heading">
                {{-- <span class="page-heading-title2">Contact Us</span> --}}
                @if ($vendor->logo != null)
                    <img src="{{ asset('images/' . $vendor->logo) }}" alt="" style="height: 50px;">
                @elseif ($vendor->user->image != null)
                    <img src="{{ asset('images/' . $vendor->user->image) }}" alt="" style="height: 50px;">
                @else
                    <img src="{{ asset('shopAssets/images/media/product9.jpg') }}" alt="" style="height: 50px;">
                @endif
            </h2>

            <div class="page-content" id="contact">
                <div class="row">
                    <div id="contact_form_map" class="col-xs-12 col-sm-6">
                        <h3 class="page-subheading">Vendor Information</h3>
                        <p><strong>Name:</strong> {{ $vendor->name }}</p>
                        <p><strong>Email:</strong> {{ $vendor->email }}</p>
                        <p><strong>Phone:</strong> {{ $vendor->phone }}</p>
                        <p><strong>Address:</strong> {{ $vendor->address }}</p>
                        <p><strong>Social Media Links:</strong></p>
                        <ul>
                            @if ($vendor->insta)
                                <li><a href="{{ $vendor->insta }}">Instagram</a></li>
                            @endif
                            @if ($vendor->facebook)
                                <li><a href="{{ $vendor->facebook }}">Facebook</a></li>
                            @endif
                            @if ($vendor->twitter)
                                <li><a href="{{ $vendor->twitter }}">Twitter</a></li>
                            @endif
                            @if ($vendor->linkedin)
                                <li><a href="{{ $vendor->linkedin }}">LinkedIn</a></li>
                            @endif
                        </ul>

                        {{-- <h3>User Information</h3>
                    <p><strong>Full Name:</strong> {{ $vendor->user->full_name }}</p>
                    <p><strong>Email:</strong> {{ $vendor->user->email }}</p>
                    <p><strong>Phone:</strong> {{ $vendor->user->phone }}</p>
                    <p><strong>Address:</strong> {{ $vendor->user->address }}, {{ $vendor->user->city }}, {{ $vendor->user->state }}, {{ $vendor->user->country }} - {{ $vendor->user->zipcode }}</p> --}}
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
