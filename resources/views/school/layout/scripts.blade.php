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

        $('.js-example-basic-multiple').select2();
    });
</script>

@yield('script')