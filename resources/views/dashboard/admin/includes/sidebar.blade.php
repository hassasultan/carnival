<!-- Sidebar -->
<aside class="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-brand">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Carnival Logo" class="logo">
            <span class="brand-text">Carnival Admin</span>
        </div>
        <button class="sidebar-toggle" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <nav class="sidebar-nav">
        <!-- Dashboard -->
        <div class="nav-section">
            <h6 class="nav-section-title">Dashboard</h6>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link {{ request()->routeIs('admin') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- User Management -->
        <div class="nav-section">
            <h6 class="nav-section-title">User Management</h6>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}">
                        <i class="fas fa-user-shield"></i>
                        <span>Roles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('permissions.index') }}" class="nav-link {{ request()->routeIs('permissions.*') ? 'active' : '' }}">
                        <i class="fas fa-key"></i>
                        <span>Permissions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('role_permissions.index') }}" class="nav-link {{ request()->routeIs('role_permissions.*') ? 'active' : '' }}">
                        <i class="fas fa-link"></i>
                        <span>Role Permissions</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content Management -->
        <div class="nav-section">
            <h6 class="nav-section-title">Content Management</h6>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}">
                        <i class="fas fa-box"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('costumes.index') }}" class="nav-link {{ request()->routeIs('costumes.*') ? 'active' : '' }}">
                        <i class="fas fa-mask"></i>
                        <span>Costumes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('events.index') }}" class="nav-link {{ request()->routeIs('events.*') ? 'active' : '' }}">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Events</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.index') }}" class="nav-link {{ request()->routeIs('blogs.*') ? 'active' : '' }}">
                        <i class="fas fa-blog"></i>
                        <span>Blogs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tickets.index') }}" class="nav-link {{ request()->routeIs('tickets.*') ? 'active' : '' }}">
                        <i class="fas fa-ticket-alt"></i>
                        <span>Tickets</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('variants.index') }}" class="nav-link {{ request()->routeIs('variants.*') ? 'active' : '' }}">
                        <i class="fas fa-tags"></i>
                        <span>Variants</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Categories & Features -->
        <div class="nav-section">
            <h6 class="nav-section-title">Categories & Features</h6>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                        <i class="fas fa-folder"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('subcategories.index') }}" class="nav-link {{ request()->routeIs('subcategories.*') ? 'active' : '' }}">
                        <i class="fas fa-folder-open"></i>
                        <span>Subcategories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('features.index') }}" class="nav-link {{ request()->routeIs('features.*') ? 'active' : '' }}">
                        <i class="fas fa-star"></i>
                        <span>Features</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Business Management -->
        <div class="nav-section">
            <h6 class="nav-section-title">Business Management</h6>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('packages.index') }}" class="nav-link {{ request()->routeIs('packages.*') ? 'active' : '' }}">
                        <i class="fas fa-box-open"></i>
                        <span>Packages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('orders.index') }}" class="nav-link {{ request()->routeIs('orders.*') ? 'active' : '' }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('appointments.index') }}" class="nav-link {{ request()->routeIs('appointments.*') ? 'active' : '' }}">
                        <i class="fas fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('carnivals.index') }}" class="nav-link {{ request()->routeIs('carnivals.*') ? 'active' : '' }}">
                        <i class="fas fa-tent"></i>
                        <span>Carnivals</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Media & Entertainment -->
        <div class="nav-section">
            <h6 class="nav-section-title">Media & Entertainment</h6>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('musics.index') }}" class="nav-link {{ request()->routeIs('musics.*') ? 'active' : '' }}">
                        <i class="fas fa-music"></i>
                        <span>Music</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('services.index') }}" class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">
                        <i class="fas fa-cogs"></i>
                        <span>Services</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site_gallery.index') }}" class="nav-link {{ request()->routeIs('site_gallery.*') ? 'active' : '' }}">
                        <i class="fas fa-images"></i>
                        <span>Site Gallery</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Marketing & Promotions -->
        <div class="nav-section">
            <h6 class="nav-section-title">Marketing & Promotions</h6>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('banners.index') }}" class="nav-link {{ request()->routeIs('banners.*') ? 'active' : '' }}">
                        <i class="fas fa-flag"></i>
                        <span>Banners</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('advertisements.index') }}" class="nav-link {{ request()->routeIs('advertisements.*') ? 'active' : '' }}">
                        <i class="fas fa-ad"></i>
                        <span>Advertisements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('testimonials.index') }}" class="nav-link {{ request()->routeIs('testimonials.*') ? 'active' : '' }}">
                        <i class="fas fa-quote-left"></i>
                        <span>Testimonials</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('brands.index') }}" class="nav-link {{ request()->routeIs('brands.*') ? 'active' : '' }}">
                        <i class="fas fa-trademark"></i>
                        <span>Brands</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Partners & Investors -->
        <div class="nav-section">
            <h6 class="nav-section-title">Partners & Investors</h6>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('investors.index') }}" class="nav-link {{ request()->routeIs('investors.*') ? 'active' : '' }}">
                        <i class="fas fa-handshake"></i>
                        <span>Investors</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('our_services.index') }}" class="nav-link {{ request()->routeIs('our_services.*') ? 'active' : '' }}">
                        <i class="fas fa-briefcase"></i>
                        <span>Our Services</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Location Management -->
        <div class="nav-section">
            <h6 class="nav-section-title">Location Management</h6>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('regions.index') }}" class="nav-link {{ request()->routeIs('regions.*') ? 'active' : '' }}">
                        <i class="fas fa-globe"></i>
                        <span>Regions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('countries.index') }}" class="nav-link {{ request()->routeIs('countries.*') ? 'active' : '' }}">
                        <i class="fas fa-flag"></i>
                        <span>Countries</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cities.index') }}" class="nav-link {{ request()->routeIs('cities.*') ? 'active' : '' }}">
                        <i class="fas fa-city"></i>
                        <span>Cities</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('states.index') }}" class="nav-link {{ request()->routeIs('states.*') ? 'active' : '' }}">
                        <i class="fas fa-map"></i>
                        <span>States</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content & Information -->
        <div class="nav-section">
            <h6 class="nav-section-title">Content & Information</h6>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('faqs.index') }}" class="nav-link {{ request()->routeIs('faqs.*') ? 'active' : '' }}">
                        <i class="fas fa-question-circle"></i>
                        <span>FAQs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faqs_page.index') }}" class="nav-link {{ request()->routeIs('faqs_page.*') ? 'active' : '' }}">
                        <i class="fas fa-file-alt"></i>
                        <span>FAQ Pages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('our_team.index') }}" class="nav-link {{ request()->routeIs('our_team.*') ? 'active' : '' }}">
                        <i class="fas fa-users-cog"></i>
                        <span>Our Team</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('events_country_tabs.index') }}" class="nav-link {{ request()->routeIs('events_country_tabs.*') ? 'active' : '' }}">
                        <i class="fas fa-tabs"></i>
                        <span>Event Country Tabs</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar Footer -->
    <div class="sidebar-footer">
        <div class="user-info">
            <div class="user-avatar">
                <img src="{{ asset('assets/images/avatars/face-1.jpg') }}" alt="Admin Avatar">
            </div>
            <div class="user-details">
                <span class="user-name">{{ Auth::user()->name ?? 'Admin' }}</span>
                <span class="user-role">Administrator</span>
            </div>
        </div>
        <div class="sidebar-actions">
            <a href="{{ route('logout') }}" class="logout-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</aside>

<!-- Mobile Overlay -->
<div class="sidebar-overlay" id="sidebarOverlay"></div> 