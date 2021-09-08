<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/admin/css/style.css">
     <!-- End layout styles -->
    <link rel="shortcut icon" href="/admin/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left p-5">
                    <div class="brand-logo">
                      <h3 class="text-center">Blood Buddies</h3>
                    </div>
                    <h6 class="font-weight-light">Sign in to continue.</h6>
                    @if (Session::has('success'))
                    <br>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success</strong> {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif(Session::has('fail'))
                    <br>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oops</strong> {{session('fail')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form class="pt-3" method="POST" action="">
                        @csrf
                      <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="mt-3">
                          <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
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
    <script src="/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/admin/js/off-canvas.js"></script>
    <script src="/admin/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>