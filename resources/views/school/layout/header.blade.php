<header class="app-header">

    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">

        <!-- Start::header-content-left -->
        <div class="header-content-left">
            <div class="header-element">
                <!-- Start::header-link -->
                <a aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                <!-- End::header-link -->
            </div>
        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <div class="header-content-right">
            <!-- Start::header-element -->
            <div class="header-element">
                
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link  dropdown-toggle" id="mainHeaderProfile"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('admin/assets/images/logo.png')}}" alt="img" width="30" height="30"
                                class="rounded-circle">
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <div class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                    aria-labelledby="mainHeaderProfile">
                    <div class="header-navheading">
                        <h6 class="main-notification-title">{{ auth()->guard('school')->user()->name }}</h6>
                    </div>
                    <a class="dropdown-item fs-13 border-top text-wrap" href="profile.html">
                        <i class="fe fe-user fs-15 me-2 d-inline-flex"></i> My Profile
                    </a>
                    <a class="dropdown-item fs-13 text-wrap" href="profile.html">
                        <i class="fe fe-edit fs-15 me-2 d-inline-flex"></i> Edit Profile
                    </a>
                    <a class="dropdown-item fs-13 text-wrap" href="settings.html">
                        <i class="fe fe-settings fs-15 me-2 d-inline-flex"></i> Settings
                    </a>
                    <a class="dropdown-item fs-13 text-wrap" href="timeline.html">
                        <i class="fe fe-activity fs-15 me-2 d-inline-flex"></i> Activity
                    </a>
                    <a class="dropdown-item fs-13 text-wrap" href="{{ route('school-logout') }}">
                        <i class="fe fe-power fs-15 me-2 d-inline-flex"></i> Sign Out
                    </a>
                </div>
            </div>
            
        </div>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

</header>