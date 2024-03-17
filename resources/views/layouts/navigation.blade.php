<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
<img style="width: 20%" src="/logo.png" alt="logo">
    {{-- <a class="navbar-brand" href="/">Job Portal</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item "><a href="/" class="nav-link">Home</a></li>
        <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>  -->
        <li class="nav-item "><a class="nav-link" href="/company">Company</a></li>
        <li class="nav-item "><a class="nav-link" href="/joblisting">Hiring Now</a></li>
        {{-- <li class="nav-item "><a class="nav-link" href="/aboutus">About Us</a></li> --}}
        <li class="nav-item "><a class="nav-link" href="/contact">Contact</a></li>
        @guest
        <li class="nav-item login"><a class="nav-link" href="/login"> <i class="fa fa-lock"></i> Login </a>
          @else
        <li class="nav-item login"><a class="nav-link" href="/dashboard"> <i class="fa fa-lock"></i> Dashboard </a>

          @endguest
        </li>
        @guest
        <li class="nav-item cta mr-md-2"><a href="admin/createJob" class="nav-link">Post a Job</a></li>
        @else
        @role('employer')
        <li class="nav-item cta mr-md-2"><a href="admin/createJob" class="nav-link">Post a Job</a></li>
        @endrole
        @endguest
        @guest
        <li class="nav-item cta cta-colored"><a href="/register" class="nav-link">Want a Job</a></li>
        @else
        @role('user')
        <li class="nav-item cta cta-colored">
          <a href="/joblisting" class="nav-link">Want a Job</a></li>
        @endrole
        @endguest


      </ul>
    </div>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h4>Login</h4>

        <button class="close" data-dismiss="modal" type="button">×</button>

      </div>

      <!-- <form action="process.php?action=login" enctype="multipart/form-data" method="post"> -->
      <div class="modal-body hold-transition login-page">
        <div id="loginerrormessage"></div>
        <div class="login-box">
          <div class="login-box-body" style="border: solid 1px #ddd;padding: 35px;min-height: 350px;">

            <form action="" method="post">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" name="user_email" id="user_email">
                <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="user_pass" id="user_pass">
                <span class="fa fa-lock form-control-feedback" style="margin-top: -22px;"></span>
              </div>
              <div class="row">
                <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <label>
                      <input type="checkbox"> Remember Me
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">

                </div>
                <!-- /.col -->
              </div>
            </form>


          </div>
          <!-- /.login-box-body -->
        </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button> <button class="btn btn-primary"
          name="btnlogin" id="btnlogin">Login</button>
      </div>
      <!-- </form> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
