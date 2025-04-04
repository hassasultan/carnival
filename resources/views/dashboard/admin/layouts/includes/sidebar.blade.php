<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light mx-n3">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            {{-- <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="../dist/index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a> --}}
            {{-- <strong class="logo"> --}}
                <a href="/" class="navbar-brand mx-auto mt-2 flex-fill text-center"><img width="120"
                        src="{{ asset('shopAssets/images/logo.png') }}" alt="logo"></a>
            {{-- </strong><!-- logo --> --}}
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
            <span>System Settings</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Roles & Permissions</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-elements">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('roles.index') }}"><span
                                class="ml-1 item-text">Roles</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('permissions.index') }}"><span
                                class="ml-1 item-text">Permissions</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('role_permissions.index') }}"><span
                                class="ml-1 item-text">RolesPermissions</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-umanagement" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">User Management</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-umanagement">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('users.index') }}"><span
                                class="ml-1 item-text">All Users</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('regions.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Region Management</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('our_services.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Our Services Management</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('site_gallery.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Gallery</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('investors.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Investors</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('brands.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Brands</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('countries.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Countries</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('states.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">States</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('cities.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Cities</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('events_country_tabs.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Events Tabs</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('testimonials.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Testimonials</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('banners.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Banners</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('advertisements.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Advertisements</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="{{ route('faqs.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">FAQs</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('our_team.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Our Team</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('faqs_page.index') }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">FAQs Pages</span>
                </a>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Category/Package</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Categories</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-category">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('categories.index') }}"><span
                                class="ml-1 item-text">Categories</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('subcategories.index') }}"><span
                                class="ml-1 item-text">Subcategories</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('variants.index') }}"><span
                                class="ml-1 item-text">Variants</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('packages.index') }}"><span
                                class="ml-1 item-text">Packages</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Products</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Products</span>
                    {{-- <span class="badge badge-pill badge-primary">New</span> --}}
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('costumes.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Costumes</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('musics.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Musics</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('appointments.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Appointments</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('carnivals.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Carnivals</span>
                </a>
            </li>
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
                    <li class="nav-item @if(Route::is('events.index')) active @endif">
                        <a class="nav-link" href="{{ route('events.index') }}"><span
                                class="ml-1 item-text">Events</span></a>
                    </li>
                    <li class="nav-item @if(Route::is('tickets.index')) active @endif">
                        <a class="nav-link" href="{{ route('tickets.index') }}">
                            Tickets Types
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Appointments</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-appointment" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Appointments</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-appointment">
                    <li class="nav-item @if(Route::is('services.index')) active @endif">
                        <a class="nav-link" href="{{ route('services.index') }}"><span
                                class="ml-1 item-text">Service</span></a>
                    </li>
                    <li class="nav-item @if(Route::is('appointments.index')) active @endif">
                        <a class="nav-link" href="{{ route('appointments.index') }}">
                            Appointments
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Blogs</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('blogs.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Blogs</span>
                </a>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Our Team</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('our_team.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Our Team</span>
                </a>
            </li>
        </ul>

    </nav>
</aside>
