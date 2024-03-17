<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="/plugins/dataTables/dataTables.bootstrap.css">  -->
    <!-- <link rel="stylesheet" href="/plugins/dataTables/jquery.dataTables.min.css">  -->

    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link href="/plugins/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="/plugins/dataTables/jquery.dataTables.min.css">

    <!-- <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css"> -->
    <!-- Daterange picker -->
    <!-- <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker-bs3.css"> -->
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>JB</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Job Portal</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu" style="padding-right: 15px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{-- <img src=" {{Auth::user()->photo}}" class="user-image" alt="User Image"> --}}
                                <span class="hidden-xs">
                                   {{Auth::user()->name}}
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                {{-- <li class="user-header">
                                    <img data-target="#menuModal" data-toggle="modal" src="" class="img-circle" alt="User Image" />
                                </li> --}}
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/admin/profile"
                                            class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                                        </form>
                                    </div>
                                    
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->

                    </ul>
                </div>
            </nav>
        </header>



        <div class="modal fade" id="menuModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button">x</button>

                        <h4 class="modal-title" id="myModalLabel">Image.</h4>
                    </div>

                    <form action="/admin/user/controller.php?action=photos" enctype="multipart/form-data" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="rows">
                                    <div class="col-md-12">
                                        <div class="rows">
                                            <div class="col-md-8">
                                                <input class="mealid" type="hidden" name="mealid" id="mealid" value="">
                                                <input name="MAX_FILE_SIZE" type="hidden" value="1000000">
                                                <input id="photo" name="photo" type="file">
                                            </div>

                                            <div class="col-md-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" type="button">Close</button> <button
                                class="btn btn-primary" name="savephoto" type="submit">Upload Photo</button>
                        </div>
                    </form>
                </div><!-- /.modal-content-->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">


                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="">
                        <a href="/dashboard">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    @role(['admin','employer'])
                    <li class="">
                        <a href="/admin/company/">
                            <i class="fa fa-building"></i> <span>Company</span>
                        </a>
                    </li>
                    @endrole
                   @role('admin')
                    <li class="">
                        <a href="/admin/role/employer">
                            <i class="fa fa-users"></i> <span>Employer</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/admin/role/admin">
                            <i class="fa fa-users"></i> <span>Admins</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/admin/role/user">
                            <i class="fa fa-users"></i> <span>Users</span>
                        </a>
                    </li>
                    @endrole
                    @role(['admin','employer'])
                    <li class="">
                        <a href="/admin/vacancy/">
                            <i class="fa fa-suitcase"></i> <span>Vacancy</span>
                        </a>
                    </li>
                    @endrole
                    <li class="">
                        <a href="/admin/applicants/">
                            <i class="fa fa-users"></i> <span>
                                @role('admin')
                                Applicants
                                @else
                                Applicantions
                                @endrole
                                
                                </span>
                            {{-- <span class="label label-primary pull-right">
                                0 </span> --}}
                        </a>
                    </li>
                 
                    @role('admin')
                    <li class="">
                        <a href="/admin/category/">
                            <i class="fa fa-list"></i> <span>Category</span>
                        </a>
                    </li>
                  

                    <li class="">
                        <a href="/admin/user/">
                            <i class="fa fa-user"></i> <span>Manage Users</span> </a>
                    </li>
                    @endrole
                    @role('user')
                    <li class="">
                        <a href="/CV">
                            <i class="fa fa-user"></i> <span>Manage CV</span> </a>
                    </li>
                    @endrole
                    @role('employer')
                    <li class="">
                        <a href="/admin/createJob">
                            <i class="fa fa-paperclip"></i> <span>Post a job</span> </a>
                    </li>
                    @endrole

                    <li class="">
                        <a href="/">
                            <i class="fa fa-logout"></i> <span>Return Main</span> </a>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            
            @yield('content')
        </div>
        <!-- /.content-wrapper -->


        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.2
            </div>
            <strong>Copyright &copy; 2024 <a href="#">FYP</a>.</strong> 
        </footer>



</body>
<script type="text/javascript" src="/plugins/jQuery/jQuery-2.1.4.min.js"> </script>
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/dist/js/app.min.js"></script>

<script type="text/javascript" src="/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/plugins/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/plugins/datepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8">
</script>

<script type="text/javascript" src="/plugins/dataTables/dataTables.bootstrap.min.js"></script>
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>

<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>

<script type="text/javascript" language="javascript" src="/plugins/input-mask/jquery.inputmask.js"></script>
<script type="text/javascript" language="javascript" src="/plugins/input-mask/jquery.inputmask.date.extensions.js">
</script>
<script type="text/javascript" language="javascript" src="/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!--      <script src="/admin/js/jquery.dataTables.min.js"></script>
<script src="/admin/js/dataTables.bootstrap.min.js"></script>
 <script type="text/javascript" src="/js/jquery-1.10.2.js"></script>       
        <script type="text/javascript" src="/js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="/js/main.js" ></script> 
        <script type="text/javascript" src="/js/janobe.js" ></script> 
        <script src="/admin/js/ekko-lightbox.js"></script>
        <script src="/admin/js/lightboxfunction.js"></script> 
  -->
<!-- jQuery 2.1.4 -->

<script>
    $(function () {
    $("#dash-table").DataTable();
    $('#dash-table2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

$('input[data-mask]').each(function() {
  var input = $(this);
  input.setMask(input.data('mask'));
});


$('#BIRTHDATE').inputmask({
  mask: "2/1/y",
  placeholder: "mm/dd/yyyy",
  alias: "date",
  hourFormat: "24"
});
$('#HIREDDATE').inputmask({
  mask: "2/1/y",
  placeholder: "mm/dd/yyyy",
  alias: "date",
  hourFormat: "24"
});

$('.date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
  startDate : '01/01/1950', 
  language:  'en',
  weekStart: 1,
  todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1, 
  startView: 2,
  minView: 2,
  forceParse: 0 

});


</script>

</html>