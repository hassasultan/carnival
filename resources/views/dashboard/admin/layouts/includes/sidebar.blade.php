<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light mx-n3">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="../dist/index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>

        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="dashboard">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('packages.index') }}"><span
                                class="ml-1 item-text">Packages</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('categories.index') }}"><span
                                class="ml-1 item-text">Categories</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('products.index') }}"><span
                                class="ml-1 item-text">Products</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('events.index') }}"><span
                                class="ml-1 item-text">Events</span></a>
                    </li>
                    {{-- <li class="nav-item active">
              <a class="nav-link" href="../dist/index.html"><span class="ml-1 item-text">Default</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../dist/dashboard-analytics.html"><span class="ml-1 item-text">Analytics</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../dist/dashboard-sales.html"><span class="ml-1 item-text">E-commerce</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../dist/dashboard-saas.html"><span class="ml-1 item-text">Saas Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../dist/dashboard-system.html"><span class="ml-1 item-text">Systems</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../dist/dashboard-iot.html"><span class="ml-1 item-text">iOT - Smarthome</span></a>
            </li> --}}
                </ul>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Components</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">UI elements</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="ui-elements">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/ui-color.html"><span class="ml-1 item-text">Colors</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/ui-typograpy.html"><span
                                class="ml-1 item-text">Typograpy</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/ui-icons.html"><span class="ml-1 item-text">Icons</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/ui-buttons.html"><span
                                class="ml-1 item-text">Buttons</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/ui-notification.html"><span
                                class="ml-1 item-text">Notifications</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/ui-modals.html"><span class="ml-1 item-text">Modals</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/ui-tabs-accordion.html"><span class="ml-1 item-text">Tabs &
                                Accordion</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/ui-progress.html"><span
                                class="ml-1 item-text">Progress</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="../dist/widgets.html">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Widgets</span>
                    <span class="badge badge-pill badge-primary">New</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-credit-card fe-16"></i>
                    <span class="ml-3 item-text">Forms</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="forms">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/form_elements.html"><span class="ml-1 item-text">Basic
                                Elements</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/form_advanced.html"><span class="ml-1 item-text">Advanced
                                Elements</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/form_validation.html"><span
                                class="ml-1 item-text">Validation</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/form_wizard.html"><span
                                class="ml-1 item-text">Wizard</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/form_layouts.html"><span
                                class="ml-1 item-text">Layouts</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/form_upload.html"><span class="ml-1 item-text">File
                                upload</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-grid fe-16"></i>
                    <span class="ml-3 item-text">Tables</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="tables">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/table_basic.html"><span class="ml-1 item-text">Basic
                                Tables</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/table_advanced.html"><span class="ml-1 item-text">Advanced
                                Tables</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/table_datatables.html"><span class="ml-1 item-text">Data
                                Tables</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-pie-chart fe-16"></i>
                    <span class="ml-3 item-text">Charts</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="charts">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/chart-inline.html"><span class="ml-1 item-text">Inline
                                Chart</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/chart-chartjs.html"><span
                                class="ml-1 item-text">Chartjs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/chart-apexcharts.html"><span
                                class="ml-1 item-text">ApexCharts</span></a>
                    </li>
                    <!-- <li class="nav-item">
              <a class="nav-link" href="../dist/datamaps.html"><span class="ml-1 item-text">Datamaps</span></a>
            </li> -->
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#maps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-map-pin fe-16"></i>
                    <span class="ml-3 item-text">Maps</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="maps">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/map-vector.html"><span class="ml-1 item-text">Vector
                                Maps</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/map-mapbox.html"><span
                                class="ml-1 item-text">Mapbox</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Apps</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="calendar.html">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">Calendar</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">Contacts</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="contact">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/contacts-list-1.html"><span class="ml-1">Contact - List
                                1</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/contacts-list-2.html"><span class="ml-1">Contact - List
                                2</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/contacts-grid.html"><span class="ml-1">Contact -
                                Grid</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/contacts-new.html"><span class="ml-1">New Contact</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">Profile</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="profile">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/profile.html"><span class="ml-1">Overview</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/profile-settings.html"><span class="ml-1">Settings</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/profile-security.html"><span class="ml-1">Security</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/profile-notification.html"><span
                                class="ml-1">Notifications</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-folder fe-16"></i>
                    <span class="ml-3 item-text">File Manager</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="fileman">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/files-list.html"><span class="ml-1">Files - List</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/files-grid-1.html"><span class="ml-1">Files - Grid
                                1</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/files-grid-2.html"><span class="ml-1">Files - Grid
                                2</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#support" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-compass fe-16"></i>
                    <span class="ml-3 item-text">Help Desk</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="support">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/support-center.html"><span class="ml-1">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/support-tickets.html"><span class="ml-1">Tickets</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/support-ticket-detail.html"><span class="ml-1">Ticket
                                Detail</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/support-faqs.html"><span class="ml-1">FAQs</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Extra</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-file fe-16"></i>
                    <span class="ml-3 item-text">Pages</span>
                </a>
                <ul class="collapse list-unstyled w-100 w-100" id="pages">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/page-orders.html">
                            <span class="ml-1 item-text">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/page-timeline.html">
                            <span class="ml-1 item-text">Timeline</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/page-invoice.html">
                            <span class="ml-1 item-text">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/page-404.html">
                            <span class="ml-1 item-text">Page 404</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/page-500.html">
                            <span class="ml-1 item-text">Page 500</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/page-blank.html">
                            <span class="ml-1 item-text">Blank</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#auth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-shield fe-16"></i>
                    <span class="ml-3 item-text">Authentication</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="auth">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/auth-login.html"><span class="ml-1">Login 1</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/auth-login-half.html"><span class="ml-1">Login 2</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/auth-register.html"><span class="ml-1">Register</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/auth-resetpw.html"><span class="ml-1">Reset
                                Password</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/auth-confirm.html"><span class="ml-1">Confirm
                                Password</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#layouts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-layout fe-16"></i>
                    <span class="ml-3 item-text">Layout</span>
                </a>
                <ul class="collapse list-unstyled w-100" id="layouts">
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/index.html"><span class="ml-1 item-text">Default</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/index-horizontal-1.html"><span class="ml-1 item-text">Top
                                Navigation 1</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/index-horizontal-2.html"><span class="ml-1 item-text">Top
                                Navigation 2</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/index-vertical-1.html"><span
                                class="ml-1 item-text">Sidebar</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/index-vertical-2.html"><span class="ml-1 item-text">Sidebar -
                                Condensed</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dist/index-vertical-3.html"><span class="ml-1 item-text">Sidebar -
                                Two Column</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../dist/index-boxed.html"><span
                                class="ml-1 item-text">Boxed</span></a>
                    </li>
                </ul>
            </li>
        </ul>

        <p class="text-muted nav-heading mt-4 mb-2 pl-4">
            <span>Documentation</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="../docs/index.html">
                    <i class="fe fe-help-circle fe-16"></i>
                    <span class="ml-3 item-text">Getting Start</span>
                </a>
            </li>
        </ul>
        {{-- <div class="btn-box w-100 mt-4 mb-1 mx-4">
        <div class="card bg-primary-light shadow-lg rounded-lg border-0">
            <div class="card-body p5">
                <h4 class="text-white mb-1">Premium version</h5>
                <p class="text-primary-lighter">Get all features with 6 months free support</p>
                <div class="w-75 mx-auto">
                    <svg id="b5162e9e-2823-4c19-907c-4c0a60840bc1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 651.97695 579.64718"><path d="M340.61426,373.76129,315.83978,401.533c20.58137,8.73023,41.41509-3.38955,49.95521-9.46585a123.72971,123.72971,0,1,0-25.18073-18.30582Z" transform="translate(-274.01152 -160.17641)" fill="#e6e6e6"></path><path d="M358.625,263.3428c25.55854-.26612,51.11383-.72306,76.67122-1.07026q12.78036-.17362,25.56125-.30439c7.34162-.07644,7.36039-11.49273,0-11.4161-25.55854.26612-51.11384.72306-76.67123,1.07026q-12.78036.17362-25.56124.30439c-7.34162.07644-7.36039,11.49273,0,11.4161Z" transform="translate(-274.01152 -160.17641)" fill="#fff"></path><path d="M358.625,289.98037l103.29728-1.07026,29.37812-.30439c7.34165-.07606,7.36039-11.49236,0-11.4161l-103.29727,1.07026-29.37813.30439c-7.34165.07606-7.36038,11.49236,0,11.4161Z" transform="translate(-274.01152 -160.17641)" fill="#fff"></path><path d="M358.625,316.61794l103.29728-1.07026,29.37812-.30439c7.34165-.07606,7.36039-11.49236,0-11.4161l-103.29727,1.07026-29.37813.30438c-7.34165.07607-7.36038,11.49237,0,11.41611Z" transform="translate(-274.01152 -160.17641)" fill="#fff"></path><circle cx="9" cy="256.37526" r="9" fill="#e6e6e6"></circle><path d="M730.30061,470.85021l-5.0312,31.40224a13.61663,13.61663,0,0,1-17.94956,10.69588h0a13.61664,13.61664,0,0,1-7.40427-19.45279l16.3699-29.52456,63.28132-126.39719a22.12795,22.12795,0,0,1,25.08831-10.00345l6.70454,1.90632-9.97115,29.23873Z" transform="translate(-274.01152 -160.17641)" fill="#a0616a"></path><polygon points="630.924 531.437 645.737 530.657 629.365 476.082 605.975 480.76 630.924 531.437" fill="#a0616a"></polygon><polygon points="482.791 541.573 499.164 541.573 507.74 488.556 482.791 488.556 482.791 541.573" fill="#a0616a"></polygon><path d="M782.75544,253.9064a44.18456,44.18456,0,0,0,88.35921.9373c.01308-.308.01308-.62936.01308-.9373a44.18615,44.18615,0,1,0-88.37229,0Z" transform="translate(-274.01152 -160.17641)" fill="#2f2e41"></path><circle cx="571.6757" cy="46.8659" r="22.76256" fill="#2f2e41"></circle><path d="M843.31274,224.44208a22.75806,22.75806,0,0,0,27.49458-32.79916A22.75648,22.75648,0,1,1,834.29,218.37214,22.64574,22.64574,0,0,0,843.31274,224.44208Z" transform="translate(-274.01152 -160.17641)" fill="#2f2e41"></path><circle cx="549.4447" cy="116.70396" r="25.52994" fill="#a0616a"></circle><path d="M841.7841,286.19625s2.339,29.62665,17.15227,35.86384l-57.694,53.0161-18.71157-8.57614,13.254-37.42313s30.40629-6.23718,17.93191-33.52488Z" transform="translate(-274.01152 -160.17641)" fill="#a0616a"></path><path d="M743.54839,653.41071l42.101,2.33894,19.49121-146.57392L855.81777,654.97l50.67716-16.37262L856.59742,471.7526c-12.84726-46.15308-2.03858-96.87425,15.593-148.91286l-19.49121-5.45754-44.44,6.23718h0A25.81016,25.81016,0,0,0,785.74058,336.888c-10.94689,19.60026-18.86219,38.61582-12.4089,54.86022C747.45881,459.464,741.87983,552.00463,743.54839,653.41071Z" transform="translate(-274.01152 -160.17641)" fill="#2f2e41"></path><path d="M868.29215,484.227l-10.827,29.903a13.61664,13.61664,0,0,0,10.51163,18.05808h0a13.61664,13.61664,0,0,0,15.90827-13.42242v-33.759l5.94674-141.22823a22.128,22.128,0,0,0-17.09071-20.91411l-6.78795-1.58385-5.45754,30.40629Z" transform="translate(-274.01152 -160.17641)" fill="#a0616a"></path><path d="M910.23612,734.94815h0a13.765,13.765,0,0,0,13.75864-10.42051l.51813-2.07253a49.4194,49.4194,0,0,0-1.88475-29.89786L917.41,679.13911,901.817,686.156l-4.79843,33.05578A13.765,13.765,0,0,0,910.23612,734.94815Z" transform="translate(-274.01152 -160.17641)" fill="#2f2e41"></path><path d="M731.72954,738.11346h0a11.729,11.729,0,0,0,11.40812.43946l29.689-16.72212a10.67146,10.67146,0,0,0,5.272-11.15258l-3.36436-19.06474H756.02276L729.28191,720.0612A11.729,11.729,0,0,0,731.72954,738.11346Z" transform="translate(-274.01152 -160.17641)" fill="#2f2e41"></path><path d="M783.15687,247.948c6.92239,16.77739,24.81156,28.721,45.79318,28.721,17.96892,0,33.67506-8.75686,42.1646-21.82526.01308-.308.01308-.62936.01308-.9373a44.1873,44.1873,0,0,0-87.97086-5.95845Z" transform="translate(-274.01152 -160.17641)" fill="#2f2e41"></path><path d="M705.34811,378.44867A123.49556,123.49556,0,1,0,641.205,486.79519c8.54012,6.0763,29.37384,18.19608,49.95521,9.46586l-24.77448-27.77168A123.19385,123.19385,0,0,0,705.34811,378.44867Z" transform="translate(-274.01152 -160.17641)" class="fill-primary"></path><path d="M518.64809,358.07088c25.55854-.26611,51.11383-.72306,76.67122-1.07026q12.78036-.17363,25.56124-.30438c7.34163-.07644,7.3604-11.49274,0-11.41611-25.55853.26612-51.11383.72306-76.67122,1.07026q-12.78036.17362-25.56124.30439c-7.34162.07644-7.36039,11.49273,0,11.4161Z" transform="translate(-274.01152 -160.17641)" fill="#fff"></path><path d="M518.64809,384.70845l103.29728-1.07026,29.37812-.30439c7.34165-.07606,7.36038-11.49236,0-11.4161L548.02621,372.988l-29.37812.30439c-7.34165.07606-7.36038,11.49236,0,11.4161Z" transform="translate(-274.01152 -160.17641)" fill="#fff"></path><path d="M518.64809,411.346l103.29728-1.07026,29.37812-.30439c7.34165-.07606,7.36038-11.49236,0-11.4161l-103.29728,1.07026-29.37812.30439c-7.34165.07606-7.36038,11.49236,0,11.4161Z" transform="translate(-274.01152 -160.17641)" fill="#fff"></path></svg>
                </div>
                <a class="btn mb-2 btn-primary btn-lg btn-block" href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269" target="_blank" >
                    <i class="fe fe-shopping-cart fe-12 mr-2"></i><span class="small">Buy now</span>
                </a>
            </div> <!-- .card-body -->
        </div> <!-- .card -->
      </div> --}}
    </nav>
</aside>