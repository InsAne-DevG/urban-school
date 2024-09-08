<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{ env('APP_NAME')}} </title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/images/logo.png') }}" type="image/x-icon">
    
    <!-- Main Theme Js -->
    <script src="{{ asset('admin/assets/js/main.js')}}"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('admin/assets/css/styles.min.css') }}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" >

    <!-- Simplebar Css -->
    <link href="{{ asset('admin/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >

    <link rel="stylesheet" href="{{ asset('admin/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

</head>

<body>

	<!-- Loader -->
	<div id="loader" >
	    <img src="{{ asset('admin/assets/images/loader.svg') }}" alt="">
	</div>
	<!-- Loader -->

	<div class="page">
		<!-- app-header -->
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
		                        <h6 class="main-notification-title">Sonia Taylor</h6>
		                        <p class="main-notification-text">Web Designer</p>
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
		                    <a class="dropdown-item fs-13 text-wrap" href="signin.html">
		                        <i class="fe fe-power fs-15 me-2 d-inline-flex"></i> Sign Out
		                    </a>
		                </div>
		            </div>
		            
		        </div>
		        <!-- End::header-content-right -->

		    </div>
		    <!-- End::main-header-container -->

		</header>
		<!-- /app-header -->
		<!-- Start::app-sidebar -->
		<aside class="app-sidebar sticky" id="sidebar">

		    <!-- Start::main-sidebar-header -->
		    <div class="main-sidebar-header">
		        <a href="{{ route('admin-login')}}" class="header-logo">
		            <img src="{{ asset('admin/assets/images/logo.png')}}" alt="logo" class="desktop-logo">
		        </a>
		    </div>
		    <!-- End::main-sidebar-header -->

		    <!-- Start::main-sidebar -->
		    <div class="main-sidebar" id="sidebar-scroll">

		        <!-- Start::nav -->
		        <nav class="main-menu-container nav nav-pills flex-column sub-open">
		            <div class="slide-left" id="slide-left">
		                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
		            </div>
		            <ul class="main-menu">
		                <!-- Start::slide__category -->
		                <li class="slide__category"><span class="category-name">Dashboard</span></li>
		                <!-- End::slide__category -->

		                <!-- Start::slide -->
		                <li class="slide">
		                    <a href="{{ route('admin-dashboard') }}" class="side-menu__item">
		                        <i class="fe fe-airplay side-menu__icon"></i>
		                        <span class="side-menu__label">Dashboard</span>
		                    </a>
		                </li>
		                <!-- End::slide -->

		                <!-- Start::slide__category -->
		                <li class="slide__category"><span class="category-name">Student Managemnet</span></li>
		                <!-- End::slide__category -->

		                <!-- Start::slide -->
		                <li class="slide">
		                    <a href="" class="side-menu__item">
		                        <i class="fe fe-box side-menu__icon"></i>
		                        <span class="side-menu__label">Student</span>
		                        
		                    </a>
		                    
		                </li>
		            
		            </ul>
		            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
		        </nav>
		        <!-- End::nav -->

		    </div>
		    <!-- End::main-sidebar -->

		</aside>
		<!-- End::app-sidebar -->

		<!-- Start::app-content -->
		<div class="main-content app-content">
			@yield('content')
		</div>
		<!-- End::app-content -->

		
		<footer class="main-footer mt-auto py-3 bg-white text-center">
		    <div class="container">
		        <span class=""> Copyright © <span id="year">2024</span> <a
		                href="javascript:void(0);" class="text-primary fw-semibold">UrbanEducation</a>.
		            Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
		                <span class="fw-semibold text-primary">UrbanEducation</span>
		            </a> All
		            rights
		            reserved
		        </span>
		    </div>
		</footer>
		<!-- Footer End -->

	</div>

	<!-- Popper JS -->
	<script src="{{ asset('admin/assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>

	<!-- Bootstrap JS -->
	<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Defaultmenu JS -->
	<script src="{{ asset('admin/assets/js/defaultmenu.min.js')}}"></script>

	<!-- Simplebar JS -->
	<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
	<script src="{{ asset('admin/assets/js/simplebar.js')}}"></script>

	<!-- Color Picker JS -->
	<script src="{{ asset('admin/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Toaster -->
    <script src="{{ asset('admin/assets/js/Toasts.js')}}"></script>

    @if(session('toast_message'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="bottomright-Toast" class="toast colored-toast bg-primary-transparent text-primary" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-primary text-fixed-white">
                    <img class="bd-placeholder-img rounded me-2" src="{{ asset('admin/assets/images/logo.png')}}" alt="...">
                    <strong class="me-auto">{{ env('APP_NAME')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('toast_message') }}
                </div>
            </div>
        </div>
    @endif
    <script>
        $(document).ready(function(){
            // Show the toast
            $('.toast').toast('show');
        });
    </script>
</body>

</html>