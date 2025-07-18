<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light mx-n3">
        <!-- Logo -->
        <div class="w-100 mb-4 d-flex">
            <a href="/" class="navbar-brand mx-auto mt-2 flex-fill text-center">
                <img width="120" src="{{ asset('shopAssets/images/logo.png') }}" alt="logo">
            </a>
        </div>

        <!-- Dashboard -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('admin') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                    <span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>

        <!-- System Administration -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>System Administration</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-shield fe-16"></i>
                    <span class="ml-3 item-text">Access Control</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-elements">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('roles.index') }}">
                            <span class="ml-1 item-text">Roles</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('permissions.index') }}">
                            <span class="ml-1 item-text">Permissions</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('role_permissions.index') }}">
                            <span class="ml-1 item-text">Role Permissions</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#ui-umanagement" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">User Management</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-umanagement">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <span class="ml-1 item-text">All Users</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Content Management -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Content Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-content" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-file-text fe-16"></i>
                    <span class="ml-3 item-text">Website Content</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-content">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('banners.index') }}">
                            <span class="ml-1 item-text">Banners</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('advertisements.index') }}">
                            <span class="ml-1 item-text">Advertisements</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('testimonials.index') }}">
                            <span class="ml-1 item-text">Testimonials</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('our_team.index') }}">
                            <span class="ml-1 item-text">Our Team</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('our_services.index') }}">
                            <span class="ml-1 item-text">Our Services</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site_gallery.index') }}">
                            <span class="ml-1 item-text">Site Gallery</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#ui-support" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-help-circle fe-16"></i>
                    <span class="ml-3 item-text">Support & Help</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-support">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faqs.index') }}">
                            <span class="ml-1 item-text">FAQs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faqs_page.index') }}">
                            <span class="ml-1 item-text">FAQ Pages</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Business Partners -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Business Partners</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('brands.index') }}">
                    <i class="fe fe-award fe-16"></i>
                    <span class="ml-3 item-text">Brands</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('investors.index') }}">
                    <i class="fe fe-dollar-sign fe-16"></i>
                    <span class="ml-3 item-text">Investors</span>
                </a>
            </li>
        </ul>

        <!-- Location Management -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Location Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('regions.index') }}">
                    <i class="fe fe-globe fe-16"></i>
                    <span class="ml-3 item-text">Regions</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('countries.index') }}">
                    <i class="fe fe-flag fe-16"></i>
                    <span class="ml-3 item-text">Countries</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('states.index') }}">
                    <i class="fe fe-map fe-16"></i>
                    <span class="ml-3 item-text">States</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cities.index') }}">
                    <i class="fe fe-map-pin fe-16"></i>
                    <span class="ml-3 item-text">Cities</span>
                </a>
            </li>
        </ul>

        <!-- Catalog Management -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Catalog Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-tag fe-16"></i>
                    <span class="ml-3 item-text">Categories & Features</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-category">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('categories.index') }}">
                            <span class="ml-1 item-text">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('subcategories.index') }}">
                            <span class="ml-1 item-text">Subcategories</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('features.index') }}">
                            <span class="ml-1 item-text">Features</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('variants.index') }}">
                            <span class="ml-1 item-text">Variants</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('packages.index') }}">
                            <span class="ml-1 item-text">Packages</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Product Management -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Product Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="fe fe-shopping-bag fe-16"></i>
                    <span class="ml-3 item-text">Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('costumes.index') }}">
                    <i class="fe fe-star fe-16"></i>
                    <span class="ml-3 item-text">Costumes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('musics.index') }}">
                    <i class="fe fe-music fe-16"></i>
                    <span class="ml-3 item-text">Music</span>
                </a>
            </li>
        </ul>

        <!-- Event Management -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Event Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('carnivals.index') }}">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">Carnivals</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#ui-events" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">Events</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-events">
                    <li class="nav-item @if(Route::is('events.index')) active @endif">
                        <a class="nav-link" href="{{ route('events.index') }}">
                            <span class="ml-1 item-text">All Events</span>
                        </a>
                    </li>
                    <li class="nav-item @if(Route::is('tickets.index')) active @endif">
                        <a class="nav-link" href="{{ route('tickets.index') }}">
                            <span class="ml-1 item-text">Ticket Types</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('events_country_tabs.index') }}">
                            <span class="ml-1 item-text">Event Tabs</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Business Management -->
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Business Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('orders.index') }}">
                    <i class="fe fe-shopping-cart fe-16"></i>
                    <span class="ml-3 item-text">Orders</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#ui-appointment" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-clock fe-16"></i>
                    <span class="ml-3 item-text">Appointments</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-appointment">
                    <li class="nav-item @if(Route::is('services.index')) active @endif">
                        <a class="nav-link" href="{{ route('services.index') }}">
                            <span class="ml-1 item-text">Services</span>
                        </a>
                    </li>
                    <li class="nav-item @if(Route::is('appointments.index')) active @endif">
                        <a class="nav-link" href="{{ route('appointments.index') }}">
                            <span class="ml-1 item-text">All Appointments</span>
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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs.index') }}">
                    <i class="fe fe-file-text fe-16"></i>
                    <span class="ml-3 item-text">Blogs</span>
                </a>
            </li>
        </ul>

    </nav>
</aside>
