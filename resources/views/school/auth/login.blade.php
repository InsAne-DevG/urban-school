<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

    <head>

        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> {{ env('APP_NAME')}} </title>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('admin/assets/images/logo.png')}}" type="image/x-icon">

        <!-- Main Theme Js -->
        <script src="{{ asset('admin/assets/js/authentication-main.js')}}"></script>

        <!-- Bootstrap Css -->
        <link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >

        <!-- Style Css -->
        <link href="{{ asset('admin/assets/css/styles.min.css')}}" rel="stylesheet" >
        
        <!-- Icons cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
    </head>

    <body>
        <div class="page main-signin-wrapper">

            <!-- Row -->
            <div class="row text-center ps-0 pe-0 ms-0 me-0">
                <div class=" col-xl-4 col-lg-6 col-md-6 d-block mx-auto">
                    <div class="text-center mb-2">
                        <a  href="{{ route('admin-login')}}" class="custom-logo">
                            <img src="{{ asset('admin/assets/images/logo.png')}}" style="height:5rem" class="rounded  desktop-logo" alt="logo">
                        </a>
                    </div>
                    <div class="card custom-card">
                        <div class="card-body pd-45">
                            <h5 class="text-center">Signin to Your Account</h5>
                            <form action="{{ route('school-login') }}" method="POST">
                                @csrf
                                <div class="form-group text-start">
                                    <label>Email</label>
                                    <input class="form-control" required placeholder="Enter your email" type="text" name="email">
                                </div>
                                <div class="form-group text-start">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <input class="form-control" required name="password" placeholder="Enter your password" type="password" id="passwordInput">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-outline-primary" id="togglePassword">
                                                <i id="toggleIcon" class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="btn ripple btn-primary btn-block">Sign In</button>
                            </form>
                            <div class="mt-3 text-center">
                                <p class="mb-1"><a href="javascript:void(0);">Forgot password?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Toaster -->
    <script src="{{ asset('admin/assets/js/Toasts.js')}}"></script>

    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
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
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('passwordInput');
            const toggleIcon = document.getElementById('toggleIcon');

            // Toggle the type attribute
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye / eye-slash icon
            toggleIcon.classList.toggle('fa-eye');
            toggleIcon.classList.toggle('fa-eye-slash');
        });
    </script>
    <script>
        $(document).ready(function(){
            // Show the toast
            $('.toast').toast('show');
        });
    </script>
</html>