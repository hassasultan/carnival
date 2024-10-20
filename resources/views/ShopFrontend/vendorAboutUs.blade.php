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
                {{-- <a href="#">{{ $user->vendor ? 'Mascamps' : ($user->subvendor ? 'Section Leaders' : 'No Vendor Information') }}</a>
                {{ optional($user->vendor)->name ?? (optional($user->subvendor)->name ?? $user->name) }} --}}
                @if ($user->vendor)
                    <a href="{{ route('front.vendor.detail', $user->vendor->id) }}">Mascamps</a>
                    {{ $user->vendor->name }}
                @elseif ($user->subvendor)
                    <a href="{{ route('front.subVendor.detail', $user->subvendor->id) }}">Section Leaders</a>
                    {{ $user->subvendor->name }}
                @endif
            </ol>

            <h2 class="page-heading">
                {{-- <span class="page-heading-title2">Contact Us</span> --}}
                @php
                    $image = null;

                    if ($user->vendor && $user->vendor->logo) {
                        $image = asset('images/' . $user->vendor->logo);
                    } elseif ($user->subvendor && $user->subvendor->logo) {
                        $image = asset('images/' . $user->subvendor->logo);
                    } elseif ($user->image) {
                        $image = asset('images/' . $user->image);
                    } else {
                        $image = asset('shopAssets/images/media/product9.jpg');
                    }
                @endphp

                <img src="{{ $image }}" alt="" style="height: 50px;">
            </h2>

            <div class="page-content" id="contact">
                <div class="row">
                    <div id="contact_form_map" class="col-xs-12 col-sm-6">
                        <h3 class="page-subheading">Company Information</h3>
                        <p><strong>Name:</strong>
                            {{ optional($user->vendor)->name ?? (optional($user->subvendor)->name ?? 'N/A') }}</p>
                        <p><strong>Email:</strong>
                            {{ optional($user->vendor)->email ?? (optional($user->subvendor)->email ?? 'N/A') }}</p>
                        <p><strong>Phone:</strong>
                            {{ optional($user->vendor)->phone ?? (optional($user->subvendor)->phone ?? 'N/A') }}</p>
                        <p><strong>Address:</strong>
                            {{ optional($user->vendor)->address ?? (optional($user->subvendor)->address ?? 'N/A') }}</p>
                        <p><strong>Social Media Links:</strong></p>
                        <ul>
                            @php
                                $socialLinks = optional($user->vendor)->insta ?? optional($user->subvendor)->insta;
                                if ($socialLinks) {
                                    echo '<li><a href="' . $socialLinks . '">Instagram</a></li>';
                                }
                                @endphp
                            @if (optional($user->vendor)->facebook ?? optional($user->subvendor)->facebook)
                            <li><a
                                href="{{ optional($user->vendor)->facebook ?? optional($user->subvendor)->facebook }}">Facebook</a>
                            </li>
                            @endif
                            @if (optional($user->vendor)->twitter ?? optional($user->subvendor)->twitter)
                                <li><a
                                        href="{{ optional($user->vendor)->twitter ?? optional($user->subvendor)->twitter }}">Twitter</a>
                                </li>
                            @endif
                            @if (optional($user->vendor)->linkedin ?? optional($user->subvendor)->linkedin)
                                <li><a
                                        href="{{ optional($user->vendor)->linkedin ?? optional($user->subvendor)->linkedin }}">LinkedIn</a>
                                </li>
                            @endif
                            @if (optional($user->vendor)->youtube ?? optional($user->subvendor)->youtube)
                                <li><a
                                        href="{{ optional($user->vendor)->youtube ?? optional($user->subvendor)->youtube }}">Youtube</a>
                                </li>
                            @endif
                            @if (optional($user->vendor)->tiktok ?? optional($user->subvendor)->tiktok)
                                <li><a
                                        href="{{ optional($user->vendor)->tiktok ?? optional($user->subvendor)->tiktok }}">Tiktok</a>
                                </li>
                            @endif
                            @if (optional($user->vendor)->wa_business_page ?? optional($user->subvendor)->wa_business_page)
                                <li><a
                                        href="{{ optional($user->vendor)->wa_business_page ?? optional($user->subvendor)->wa_business_page }}">WA Business Page</a>
                                </li>
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
