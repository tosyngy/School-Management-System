<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>ADMIN LOGIN PAGE</title>

        <link href="<?php echo URL; ?>v/assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo URL; ?>v/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>v/assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>v/assets/js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>v/assets/lineicons/style.css">    

        <!-- Custom styles for this template -->
        <link href="<?php echo URL; ?>v/assets/css/style.css" rel="stylesheet">
        <link href="<?php echo URL; ?>v/assets/css/style-responsive.css" rel="stylesheet">

        <script src="<?php echo URL; ?>v/assets/js/chart-master/Chart.js"></script>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <div id="login-page">
            <div class="container">

                <form class="form-login">
                    <h2 class="form-login-heading">sign in now</h2>
                    <div class="login-wrap">
                        <input type="text" class="form-control" placeholder="User ID" autofocus id="username">
                        <br>
                        <input type="password" class="form-control" placeholder="Password" id="password">
                        <label class="checkbox">
                            <span class="pull-right">
                                <!--<a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>-->

                            </span>
                        </label>
                        <button class="btn btn-theme btn-block" type="submit" id="admin_login"><i class="fa fa-lock"></i> SIGN IN</button>
                        <hr>

                        <!--		            <div class="login-social-link centered">
                                                    <p>or you can sign in via your social network</p>
                                                        <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                                                        <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                                                    </div>-->
                        <!--		            <div class="registration">
                                                        Don't have an account yet?<br/>
                                                        <a class="" href="#">
                                                            Create an account
                                                        </a>
                                                    </div>-->

                    </div>
                    <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!--		                      <div class="modal-header">
                                                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                          <h4 class="modal-title">Forgot Password ?</h4>
                                                                      </div>-->
                                <!--		                      <div class="modal-body">
                                                                          <p>Enter your e-mail address below to reset your password.</p>
                                                                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                                                
                                                                      </div>-->
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                    <button class="btn btn-theme" type="button">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal -->

                </form>	  	

            </div>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="<?php echo URL; ?>v/assets/js/jquery.js"></script>
        <script src="<?php echo URL; ?>v/assets/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo URL; ?>v/assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="<?php echo URL; ?>v/assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?php echo URL; ?>v/assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo URL; ?>v/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo URL; ?>v/assets/js/jquery.sparkline.js"></script>
        <!--common script for all pages-->
        <script src="<?php echo URL; ?>v/assets/js/common-scripts.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>v/assets/js/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>v/assets/js/gritter-conf.js"></script>

        <!--script for this page-->
        <script src="<?php echo URL; ?>v/assets/js/sparkline-chart.js"></script>    
        <script src="<?php echo URL; ?>v/assets/js/zabuto_calendar.js"></script>	

        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="<?php echo URL; ?>v/assets/js/jquery.backstretch.min.js"></script>
        <script>
            $.backstretch("http://localhost/school/public/images/3.JPG", {speed: 500});
            //        $.backstretch("http://localhost/school/public/images/3.jpg", {speed: 500});
            //        $.backstretch("http://localhost/school/v/assets/img/login-bg.jpg", {speed: 500});
        </script>



        <script>
            $(document).ready(function() {


                $("#admin_login").click(function(e) {
                    e.preventDefault();
                    //        alert("sd");
                    var username = $("#username").val();
                    var pass = $("#password").val();
                    //alert(username + pass);
                    $.post("http://localhost/school/admin/login/", {username_admin: username, pass: pass}, function(resp) {
                        //      alert(resp);
                        if (resp.indexOf("1") > -1) {
                            document.location.replace("http://localhost/school/admin/students");
                        } else {
                            alert("Wrong Login!");
                        }
                    });
                });
            });
        </script>


    </body>
</html>