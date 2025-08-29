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
        
        <!-- Dashboard -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-credit-card fe-16"></i>
                    <span class="ml-3 item-text">Account Details</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Store front details</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">Section Leaders</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-file-text fe-16"></i>
                    <span class="ml-3 item-text">Invoice</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-shopping-cart fe-16"></i>
                    <span class="ml-3 item-text">Orders</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-download fe-16"></i>
                    <span class="ml-3 item-text">Downloads</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-heart fe-16"></i>
                    <span class="ml-3 item-text">My wishlist</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-file fe-16"></i>
                    <span class="ml-3 item-text">Tickets</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-log-out fe-16"></i>
                    <span class="ml-3 item-text">Log Out</span><span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fe fe-credit-card fe-16"></i>
                    <span class="ml-3 item-text">Bank and Payment:</span><span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>

        <!-- System Settings -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>System Settings</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-shield fe-16"></i>
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
                    <i class="fe fe-users fe-16"></i>
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

        <!-- Location Management -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Location Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('regions.index') }}" class="nav-link">
                    <i class="fe fe-globe fe-16"></i>
                    <span class="ml-3 item-text">Region Management</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('countries.index') }}" class="nav-link">
                    <i class="fe fe-flag fe-16"></i>
                    <span class="ml-3 item-text">Countries</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('states.index') }}" class="nav-link">
                    <i class="fe fe-map fe-16"></i>
                    <span class="ml-3 item-text">States</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('cities.index') }}" class="nav-link">
                    <i class="fe fe-map-pin fe-16"></i>
                    <span class="ml-3 item-text">Cities</span>
                </a>
            </li>
        </ul>

        <!-- Content Management -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Content Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('banners.index') }}" class="nav-link">
                    <i class="fe fe-flag fe-16"></i>
                    <span class="ml-3 item-text">Banners</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('advertisements.index') }}" class="nav-link">
                    <i class="fe fe-award fe-16"></i>
                    <span class="ml-3 item-text">Advertisements</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('testimonials.index') }}" class="nav-link">
                    <i class="fe fe-message-square fe-16"></i>
                    <span class="ml-3 item-text">Testimonials</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('our_team.index') }}" class="nav-link">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">Our Team</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('our_services.index') }}" class="nav-link">
                    <i class="fe fe-briefcase fe-16"></i>
                    <span class="ml-3 item-text">Our Services Management</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('site_gallery.index') }}" class="nav-link">
                    <i class="fe fe-image fe-16"></i>
                    <span class="ml-3 item-text">Gallery</span>
                </a>
            </li>
        </ul>

        <!-- Business Partners -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Business Partners</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('investors.index') }}" class="nav-link">
                    <i class="fe fe-dollar-sign fe-16"></i>
                    <span class="ml-3 item-text">Investors</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('brands.index') }}" class="nav-link">
                    <i class="fe fe-award fe-16"></i>
                    <span class="ml-3 item-text">Brands</span>
                </a>
            </li>
        </ul>

        <!-- Support & Help -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Support & Help</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('faqs.index') }}" class="nav-link">
                    <i class="fe fe-help-circle fe-16"></i>
                    <span class="ml-3 item-text">FAQs</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('faqs_page.index') }}" class="nav-link">
                    <i class="fe fe-file-text fe-16"></i>
                    <span class="ml-3 item-text">FAQs Pages</span>
                </a>
            </li>
        </ul>

        <!-- Category/Package/Features -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Category/Package/Features</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-tag fe-16"></i>
                    <span class="ml-3 item-text">Categories & Features</span>
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
                        <a class="nav-link" href="{{ route('features.index') }}"><span
                                class="ml-1 item-text">Features</span></a>
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

        <!-- Products -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Products</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="fe fe-shopping-bag fe-16"></i>
                    <span class="ml-3 item-text">Products</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('costumes.index') }}">
                    <i class="fe fe-star fe-16"></i>
                    <span class="ml-3 item-text">Costumes</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('musics.index') }}">
                    <i class="fe fe-music fe-16"></i>
                    <span class="ml-3 item-text">Musics</span>
                </a>
            </li>
        </ul>

        <!-- Business Management -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Business Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('orders.index') }}">
                    <i class="fe fe-shopping-cart fe-16"></i>
                    <span class="ml-3 item-text">Orders</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('carnivals.index') }}">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">Carnivals</span>
                </a>
            </li>
        </ul>

        <!-- Events -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Events</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-events" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">Events</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-events">
                    <li class="nav-item @if(Route::is('events.index')) active @endif">
                        <a class="nav-link" href="{{ route('events.index') }}"><span
                                class="ml-1 item-text">Events</span></a>
                    </li>
                    <li class="nav-item @if(Route::is('tickets.index')) active @endif">
                        <a class="nav-link" href="{{ route('tickets.index') }}">
                            <span class="ml-1 item-text">Tickets Types</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('events_country_tabs.index') }}">
                            <span class="ml-1 item-text">Events Tabs</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Appointments -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Appointments</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-appointment" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-clock fe-16"></i>
                    <span class="ml-3 item-text">Appointments</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-appointment">
                    <li class="nav-item @if(Route::is('services.index')) active @endif">
                        <a class="nav-link" href="{{ route('services.index') }}"><span
                                class="ml-1 item-text">Service</span></a>
                    </li>
                    <li class="nav-item @if(Route::is('appointments.index')) active @endif">
                        <a class="nav-link" href="{{ route('appointments.index') }}">
                            <span class="ml-1 item-text">Appointments</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Content Publishing -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Content Publishing</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('blogs.index') }}">
                    <i class="fe fe-file-text fe-16"></i>
                    <span class="ml-3 item-text">Blogs</span>
                </a>
            </li>
        </ul>

    </nav>
</aside>
