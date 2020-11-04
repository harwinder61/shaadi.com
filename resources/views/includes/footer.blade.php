      <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="http://shubhvivahceremony.com/login" target="_blank">Shaadi</a>. All rights reserved.</span>
              <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span> -->
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('public/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('public/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('public/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('public/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('public/assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('public/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('public/assets/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->
    <!-- Custom js for this page -->
    <script src="{{asset('public/assets/js/file-upload.js')}}"></script>
    <!-- End custom js for this page -->

    <!-- Custom js for this page -->
    <script src="{{asset('public/assets/js/alerts.js')}}"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript">
      $(".delete-user").on("click", function(){
        var id = $(this).attr('id');
        $("#exampleModalCenter").modal('show');
         $(".user_id").val(id);
      });
    </script>
  </body>
</html>