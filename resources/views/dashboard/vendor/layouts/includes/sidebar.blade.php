<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light mx-n3">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a href="/" class="navbar-brand mx-auto mt-2 flex-fill text-center"><img width="120"
                    src="{{ asset('shopAssets/images/logo.png') }}" alt="logo"></a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                    {{-- <span class="badge badge-pill badge-primary">New</span> --}}
                </a>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Members</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            {{-- @if (auth()->user()->hasPermission('carnivals')) --}}
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('vendor.carnival.committee') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Carnivals</span>
                    {{-- <span class="badge badge-pill badge-primary">New</span> --}}
                </a>
            </li>
            {{-- @endif --}}
            {{-- <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('vendor_site_gallery.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Gallery</span>
                </a>
            </li> --}}
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Events</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-events" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Events</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-events">
                    @if (auth()->user()->vendor->package->events == 1)
                        <li class="nav-item @if (Route::is('vendor.events')) active @endif">
                            <a class="nav-link" href="{{ route('vendor.events') }}"><span
                                    class="ml-1 item-text">Events</span></a>
                        </li>
                    @endif
                    {{-- @if (auth()->user()->hasPermission('tickets'))
                            <li class="nav-item @if (Route::is('tickets.index')) active @endif">
                                <a class="nav-link" href="{{ route('tickets.index') }}">
                                    Tickets Types
                                </a>
                            </li>
                        @endif --}}
                </ul>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Products</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            @if (auth()->user()->vendor->package->ecommerce == 1)
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Products</span>
                    {{-- <span class="badge badge-pill badge-primary">New</span> --}}
                </a>
            </li>
            @endif
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('vendor_site_gallery.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Gallery</span>
                </a>
            </li>
        </ul>
        @php
            $user = auth()->user()->load('vendor.package');
        @endphp
        @if ($user->vendor->package->title == 'Artistes' && auth()->user()->vendor->package->music == 1)
            <p class="text-muted nav-heading mt-4 mb-2 pl-4">
                <span>Artiste (Music)</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{ route('vendor.musics.index') }}">
                        <i class="fe fe-layers fe-16"></i>
                        <span class="ml-3 item-text">Artiste</span>
                        {{-- <span class="badge badge-pill badge-primary">New</span> --}}
                    </a>
                </li>
            </ul>
        @endif
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>My Masbands</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('vendor.myMasbands') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">My Masbands</span>
                    {{-- <span class="badge badge-pill badge-primary">New</span> --}}
                </a>
            </li>
        </ul>
        @if ($user->vendor->package->title == 'Carnival Committees')
            <p class="text-muted nav-heading mt-4 mb-2 pl-4">
                <span>Contestants</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{ route('vendor.queen.show') }}">
                        <i class="fe fe-layers fe-16"></i>
                        <span class="ml-3 item-text">Queen Show</span>
                        {{-- <span class="badge badge-pill badge-primary">New</span> --}}
                    </a>
                </li>
            </ul>
        @endif
        @if (auth()->user()->vendor->package->blogging == 1)
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Blogs</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('vendor.blogs.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Blogs</span>
                </a>
            </li>
        </ul>
        @endif
        {{-- @if (auth()->user()->hasPermission('inquiries')) --}}
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Inquiries</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('vendor.bookings') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">View Inquiries</span>
                </a>
            </li>
        </ul>
        {{-- @endif --}}
        @if (auth()->user()->vendor->package->costume == 1)
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Costumes</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('vendor.costumes.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Costumes</span>
                </a>
            </li>
        </ul>
        @endif
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Subvendors</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('vendor.subvendor.create') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Add New Subvendor</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
