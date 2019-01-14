<?php
//define("url", "http://localhost/school/admin/v/");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=""> 

        <title>ADMIN PANELL </title>

        <!-- Bootstrap core CSS -->
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


    </head>
    <header class="header" style="  background-color: rgb(66, 133, 244);">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title=""></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>CLUSTERS SCHOOL MANAGEMENT</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->

            <!--  notification end -->








        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li id="logout"><a style="background: red" class="logout" href="http://localhost/school/admin/logout">Logout</a></li>
            </ul>
        </div>
    </header>



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

    <script>
        $("#logout").click(function() {
            location = "http://localhost/school/admin/logout";
        });
        $("#log").click(function() {
            location = "http://localhost/school/admin/logout";
        });
    </script>