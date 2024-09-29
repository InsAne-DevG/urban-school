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

 @yield('css')