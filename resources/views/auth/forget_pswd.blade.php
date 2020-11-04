<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('public/assets/css/demo_1/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-transparent text-left p-5 text-center">
                <!-- <img src="{{asset('public/assets/images/faces/face13.jpg')}}" class="lock-profile-img" alt="img"> -->
                  @if(session('msg_error'))
                    <div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Error!</strong> {{session('msg_error')}}
                    </div>
                  @endif
                <form class="pt-5" action="{{url('forgetpswd')}}">
                  <div class="form-group">
                    
                    <input type="text" name="mobile" class="form-control text-center" id="examplePassword1" placeholder="Mobile Number">
                  </div>
                  <div class="mt-5">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit">Reset</button>
                   
                  </div>
                 
                </form>
              </div>
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
    <script src="{{asset('public/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
  </body>
</html>