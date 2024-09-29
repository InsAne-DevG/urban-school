<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="dark" data-header-styles="dark" data-menu-styles="dark" data-toggled="close">
<head>
   @include('school.layout.head')
</head>

<body>
	<!-- Loader -->
	<div id="loader" >
	    <img src="{{ asset('admin/assets/images/loader.svg') }}" alt="">
	</div>
	<!-- Loader -->

	<div class="page">
		<!-- app-header -->
		@include('school.layout.header')
		<!-- /app-header -->
		<!-- Start::app-sidebar -->
		@include('school.layout.sidebar')
		<!-- End::app-sidebar -->

		<!-- Start::app-content -->
		<div class="main-content app-content">
			@include('school.layout.breadcrumbs')

			<div class="container-fluid">
				@yield('content')
			</div>
		</div>
		<!-- End::app-content -->

		
		@include('school.layout.footer')
		<!-- Footer End -->

	</div>

	@include('school.layout.scripts')
</body>

</html>