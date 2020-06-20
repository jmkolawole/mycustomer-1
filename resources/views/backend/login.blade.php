
@extends('layout.authbase')
@section("custom_css")
<link href="{{ asset('/backend/assets/build/css/intlTelInput.css') }}" rel="stylesheet" type="text/css" />
@stop



@section('content')

<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-4 bg-white">
            <div class=" m-h-100">
                <div class="account-pages my-5">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-md-12 p-5">
                                        <div class="mx-auto mb-5">
                                            <a href="index.html">
                                                {{-- <img src="assets/images/logo.png" alt="" height="24" /> --}}
                                                <h3 class="d-inline align-middle ml-1 text-logo">mycustomer</h3>
                                            </a>
                                        </div>

                                        <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                                        <p class="text-muted mt-1 mb-4">Enter your email address and password to
                                            access admin panel.</p>

                                        <form action="#" class="authentication-form">
                                            <div class="form-group">
                                                <label class="form-control-label">Phone Number</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        
                                                    </div>
                                                    <input type="tel" id="phone" class="form-control">


                                                </div>
                                            </div>


                                            <div class="form-group mt-4">
                                                <label class="form-control-label">Password</label>
                                                <a href="pages-recoverpw.html"
                                                    class="float-right text-muted text-unline-dashed ml-1">Forgot your
                                                    password?</a>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div> <!-- end card-body -->
                                    </div>
                                    <!-- end card -->
                
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-primary font-weight-bold ml-1">Sign Up</a></p>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
                
                                </div> <!-- end col -->
                            <!-- end row -->
                        <!-- end container -->
                    </div>
                    <!-- end page -->


                </div>
            </div>
            <div class="col-lg-8 d-none d-md-block bg-cover" style="background-image: url({{ asset('/backend/assets/images/login.svg') }});">

            </div>
        </div>
    </div>

    @endsection

@section("javascript")
<script src="{{ asset('/backend/assets/build/js/intlTelInput.js') }}"></script>
<script>
var input = document.querySelector("#phone");
window.intlTelInput(input, {
    // any initialisation options go here
});
</script>


                
    @stop
    