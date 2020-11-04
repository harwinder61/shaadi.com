<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shaadi Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}" />
  </head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <div class="brand-logo">
                            <!-- <img src="{{asset('public/assets/images/logo.png')}}"> -->
                        </div>
                        @if(session('msg_send'))
					    	<div class="alert alert-success">
					        	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					        	<strong>Success!</strong> {{session('msg_send')}}
					      	</div>
					    @endif

                       	@if(session('msg_error'))
					      	<div class="alert alert-danger">
					        	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					        	<strong>Error!</strong> {{session('msg_error')}}
					      	</div>
					    @endif
                        <form class="pt-3"  method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-account-outline text-primary"></i>
                                        </span>
                                    </div>

                                    <input type="text"  name = "mobile_no" class="form-control form-control-lg border-left-0 " id="" placeholder="Mobile number" value="">
                                </div>

                               
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="password" name="password" class="form-control form-control-lg border-left-0 " id="exampleInputPassword" placeholder="Password" >
                                </div>
                               
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    
                                </div>
                                <a href="{{url('/forget_pswd')}}" class="auth-link text-black">Forgot password?</a>
                            </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">{{ __('Login') }}</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020 All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
   <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('public/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('public/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('public/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('public/assets/js/misc.js')}}"></script>
    <!-- endinject -->
  </body>
</html>
