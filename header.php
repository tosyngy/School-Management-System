<?php
define("URL", "http://localhost/school/");
?> 
<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="<?php echo URL ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL ?>public/css/bootstrap-themes.css">
        <link rel="stylesheet" href="<?php echo URL ?>public/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo URL ?>public/css/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo URL ?>public/css/jquery-ui.structure.css">
        <link rel="stylesheet" href="<?php echo URL ?>public/css/jquery-ui.theme.css">
        <!--<link rel="stylesheet" href="<?php echo URL ?>views/header/styles/alt.css">--> 
        <script src="<?php echo URL ?>public/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/jquery-ui.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?php echo URL ?>util/styles.css">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>util/script.js"></script>
        <title>admission Registration</title>
    </head>
    <body>

            <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p>Do you want to save changes you made to document before closing?</p>
                    <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
        
        
        <div id='navMenu'>
            <ul>
                <!--login_box-->
                <li class='active'><a href='#'>Home</a></li>
                <li> <a href="#login_box" class="" data-toggle="modal">Login</a></li>
                <!--<li><a  href='login.php'>Login</a></li>-->
                <li><a href='#'>Register</a></li>
                <li><a class="login_btn" href='#'>About</a></li>
            </ul>
        </div>
