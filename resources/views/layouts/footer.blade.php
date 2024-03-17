<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4" style="position: relative;">
                    <!-- Left vertical line -->
                    <div style="position: absolute; top: 0; bottom: 0; left: 0; width: 1px; background-color: rgb(211, 203, 203);"></div>
                    <!-- Logo -->
                    <img style="width: 100%" src="/logo.png" alt="logo">
                    <!-- Right vertical line -->
                    <div style="position: absolute; top: 0; bottom: 0; right: 0; width: 1px; background-color: rgb(211, 203, 203);"></div>

                </div>
            </div>

            {{-- <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Employers</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">How it works</a></li>
                        <li><a class="py-2 d-block" href="/aboutus">About Us</a></li>
                        <li><a href="#" class="py-2 d-block">Register</a></li>
                        <li><a href="#" class="py-2 d-block">Post a Job</a></li>
                        <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
                        <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
                        <li><a href="#" class="py-2 d-block">Blog</a></li>
                        <li><a href="#" class="py-2 d-block">Faq</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Workers</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">How it works</a></li>
                        <li><a href="#" class="py-2 d-block">Register</a></li>
                        <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
                        <li><a href="#" class="py-2 d-block">Job Search</a></li>
                        <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View,
                                    San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                        210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 20px; border-top: 1px solid rgba(220, 215, 215, 0.8); border-bottom: 1px solid rgb(229, 223, 223);">
            <div class="col-md-12 text-center" style="margin-top: 30px;margin-bottom: 30px">
                <a href="/" style="margin-right:30px; margin-left:30px; font-size: 16px; text-decoration: none;">Home</a>|
                <a href="/company" style="margin-right:30px; margin-left:30px; font-size: 16px; text-decoration: none;">Company</a>|
                <a href="/joblisting" style="margin-right:30px; margin-left:30px; font-size: 16px; text-decoration: none;">Hiring Now</a>|
                <a href="/contact" style="margin-right:30px; margin-left:30px; font-size: 16px; text-decoration: none;">Contact</a>|
                @guest
                <a href="/login" style="margin-right:30px; margin-left:30px; font-size: 16px; text-decoration: none;"> <i class="fa fa-lock"></i> Login </a>|
                @else
                <a href="/dashboard" style="margin-right:30px; margin-left:30px; font-size: 16px; text-decoration: none;"> <i class="fa fa-lock"></i> Dashboard </a>|
                @endguest
                @guest
                <a href="admin/createJob" style="margin-right:30px; margin-left:30px; font-size: 16px; text-decoration: none;">Post a Job</a>|
                @else
                @role('employer')
                <a href="admin/createJob" style="margin-right:30px; margin-left:30px; font-size: 16px; text-decoration: none;">Post a Job</a>|
                @endrole
                @endguest
                @guest
                <a href="/register" style="margin-right:30px; margin-left:30px; font-size: 16px; text-decoration: none;">Want a Job</a>
                @else
                @role('user')
                <a href="/joblisting" style="margin-right:30px; margin-left:30px; font-size: 16px; text-decoration: none;">Want a Job</a>
                @endrole
                @endguest
            </div>
        </div>




        <div class="row">
            <div class="col-md-12 text-center">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>


<script src="/plugins/jobportal/js/jquery.min.js"></script>
<script src="/plugins/jobportal/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/plugins/jobportal/js/popper.min.js"></script>
<script src="/plugins/jobportal/js/bootstrap.min.js"></script>
<script src="/plugins/jobportal/js/jquery.easing.1.3.js"></script>
<script src="/plugins/jobportal/js/jquery.waypoints.min.js"></script>
<script src="/plugins/jobportal/js/jquery.stellar.min.js"></script>
<script src="/plugins/jobportal/js/owl.carousel.min.js"></script>
<script src="/plugins/jobportal/js/jquery.magnific-popup.min.js"></script>
<script src="/plugins/jobportal/js/aos.js"></script>
<script src="/plugins/jobportal/js/jquery.animateNumber.min.js"></script>
<script src="/plugins/jobportal/js/bootstrap-datepicker.js"></script>
<script src="/plugins/jobportal/js/jquery.timepicker.min.js"></script>
<script src="/plugins/jobportal/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/plugins/jobportal/js/google-map.js"></script>
<script src="/plugins/jobportal/js/main.js"></script>
<script type="text/javascript">
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


   $("#btnlogin").click(function(){
      var username = document.getElementById("user_email");
      var pass = document.getElementById("user_pass");

      // alert(username.value)
      // alert(pass.value)
      if(username.value=="" && pass.value==""){
        $('#loginerrormessage').fadeOut();
              $('#loginerrormessage').fadeIn();
              $('#loginerrormessage').css({
                      "background" :"red",
                      "color"      : "#fff",
                      "padding"    : "5px;"
                  });
        $("#loginerrormessage").html("Invalid Username and Password!");
        //  $("#loginerrormessage").css(function(){
        //   "background-color" : "red";
        // });
      }else{

        $.ajax({    //create an ajax request to load_page.php
            type:"POST",
            url: "process.php?action=login",
            dataType: "text",  //expect html to be returned
            data:{USERNAME:username.value,PASS:pass.value},
            success: function(data){
              // alert(data);
              $('#loginerrormessage').fadeOut();
              $('#loginerrormessage').fadeIn();
              $('#loginerrormessage').css({
                      "background" :"red",
                      "color"      : "#fff",
                      "padding"    : "5px;"
                  });
             $('#loginerrormessage').html(data);
            }
            });
        }
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
