<!DOCTYPE html>

<html>
    <head>
        <title>Add Student</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL; ?>v/students/css/fm.datetator.jquery.css"/>
        <!--<link rel="stylesheet" href="style.css"/>-->  
<!--        <script src="./public/tab_resour/jquery-1.js"></script> 
 
        <script src="./public/tab_resour/std.js"></script> 
        -->

        <style>
            /*custom font*/
            /*@import url(http://fonts.googleapis.com/css?family=Montserrat);*/
            /*basic reset*/
            *{
                margin: 0; 
                padding: 0;
            }

            html{
                height: 100%;
                /*Image only BG fallback*/
                /*background: url('http://thecodeplayer.com/uploads/media/gs.png');*/
                /*background = gradient + image pattern combo*/
                background: #57bfba;
            }
            body {
                font-family: montserrat, arial, verdana;
            }
            html,body{
                width: 100%;
                height: 100%;
                overflow-x: hidden;
            }
            /*form styles*/
            #msform {
                width: 100%;
                margin: 0px auto;
                text-align: center;
                position: relative;
                height: 100%;
                margin-top: 20px;
            }
            #msform fieldset {
                background: white;
                border: 0 none;
                border-radius: 3px;
                box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
                padding: 20px 30px;

                box-sizing: border-box;
                width: 100%;
                /*margin: 0 10%;*/
                /*stacking fieldsets above each other*/
                position: absolute;
            }
            /*Hide all except first fieldset*/
            #msform fieldset:not(:first-of-type) {
                display: none;
            }
            /*inputs*/
            #msform input, #msform select {
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 3px;
                margin-bottom: 10px;
                width: 100%;
                box-sizing: border-box;
                font-family: montserrat;
                color: #2C3E50;
                font-size: 13px;
            }
            /*buttons*/
            #msform .action-button {
                width: 100px;
                background: #27AE60;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 1px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px;

            }
            #msform .action-button:hover, #msform .action-button:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
            }
            /*headings*/
            .fs-title {
                font-size: 15px;
                text-transform: uppercase;
                color: #2C3E50;
                margin-bottom: 10px;
            }
            .fs-subtitle {
                font-weight: normal;
                font-size: 13px;
                color: #666;
                margin-bottom: 20px;
            }
            /*progressbar*/
            #progressbar {
                padding-left: 70px;
                margin-bottom: 30px;
                overflow: hidden;
                text-align: center;
                /*CSS counters to number the steps*/
                counter-reset: step;
            }
            #progressbar li {
                list-style-type: none;
                color:#C64617;
                text-transform: uppercase;
                font-size: 9px;
                width: 25%;
                float: left;
                position: relative;
            }
            #progressbar li:before {
                content: counter(step);
                counter-increment: step;
                width: 20px;
                line-height: 20px;
                display: block;
                font-size: 10px;
                color: #fff;
                background: #C64617;
                border-radius: 3px;
                margin: 0 auto 5px auto;
            }
            /*progressbar connectors*/
            #progressbar li:after {
                content: '';
                width: 100%;
                height: 2px;
                background: white;
                position: absolute;
                left: -50%;
                top: 9px;
                z-index: -1; /*put it behind the numbers*/
            }
            #progressbar li:first-child:after {
                /*connector not needed before the first step*/
                content: none; 
            }
            /*marking active/completed steps green*/
            /*The number of the step and the connector before it = green*/
            #progressbar li.active:before,  #progressbar li.active:after{
                background: #27AE60;
                color: white;
            }
            #progressbar li.active{
                      color: #27AE60;
            }
            .filley{
                /*    width: 400px;
                    height: 250px;*/
                height: 208px;
                /*border-radius: 50%;*/
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=76)";
                filter: alpha(opacity=76);
                -moz-opacity: 0.76;
                -khtml-opacity: 0.76;
                opacity: 0.76;
                border: 1px #888888 solid;
                background-color: #555555;  
                margin-top: 11px;
            }

            .bannerPreview{
                /*    width: 100%;
                    height: 100%;*/
                width: 100%;
                height: 208px;
                /*border-radius: 50%;*/
            }
            .prof_dp_edit{
                width: 100%;
                height: 208px;
                /*border-radius: 50%;*/
                display: none;
            }
            .prof_dp_edit img{
                width: 100%;
                height: 208px;
                /*border-radius: 50%;*/

            }

            .input_banner{
                display: none;
                visibility: hidden;
            }
            .pix_wrapper{
                /*   margin-left: auto;
                margin-right: auto;*/
                width: 29%;
                float: right;
            }
            .form_input{
                padding: 12px !important;
                border: 1px solid #CCC;
                border-radius: 3px;
                margin-bottom: 10px;
                width: 67% !important;
                box-sizing: border-box;
                font-family: montserrat;
                color: #2C3E50;
                font-size: 13px;
                float: left !important;
            }
            .clear{
                clear: both;
            }
        </style>


        <script>

        </script>
    </head>
    <body>
        <!-- multistep form -->
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">PERSONAL INFORMATION</li>
                <li>CONTACT INFORMATION</li>
                <li>PARENTAL INFORMATION</li>
                <li>ADMISSION INFORMATION</li>
            </ul>
            <!-- fieldsets -->

            <fieldset>
                <h2 class="fs-title">Basic Information</h2>
                <!--<h3 class="fs-subtitle">Choose a Username . . .</h3>-->
                <div id="error"></div>

                <input class="error" type="text" name="fn" placeholder="FirstName"/>
                <input class="error" type="text" name="md" placeholder="MiddleName"/>
                <input id="em" class="error" type="text" name="ln" placeholder="LastName"/>

                <select class="input-block-level genda"name="gendar">
                    <option value="">GENDER</option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                </select> 
                <input id="em" class="dateofbirth error" type="date" name="dob" placeholder="Date Of Birth"/>
                <input id="em" class="error " type="text" name="sor" placeholder="State Of Origin"/>

                <select class="input-block-level nationality"name="nattion">
                    <option value="">Nationality</option>
                    <option value="nigeria">Nigeria</option>
                    <option value="cameroon">Cameron</option>
                </select>
                <input class="error" type="text" name="religion" placeholder="Religion" />
                <input type="button" name="next" rel="1" class="next action-button" value="Next" />


                <!--<div id="map-canvas">  odouysgyug</div>-->
<!--            <input type="text"  class="form-control" id="autocomplete" name="street"  placeholder="Type your full address"/><br/>
                                <input type="text" class="form-control"  name="state"  id="administrative_area_level_1" disabled="true" placeholder="State"/><br/>
                                <input id="country" name="country" placeholder="Country" disabled="true" type="text"  class="form-control" /><br/>
                -->
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Contact Information</h2>
                <!--<h3 class="fs-subtitle">Name, Registration Number . . .</h3>-->
                <div id="error2"></div>
                <input class="error2" type="text" name="address" placeholder="Home Address" />
                <input class="error2" type="text" name="city" placeholder="City" />
                <input class="error2" type="text" name="state" placeholder="State" />
                <input class="error2" type="number" name="mobile" placeholder="Phone Number" />
                <input class="error2" type="email" name="mail" placeholder="Email" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" rel="2" class="next action-button" value="Next" />
            </fieldset>  
            <fieldset>
                <h2 class="fs-title">parent Information</h2>
                <!--<h3 class="fs-subtitle">Name, Registration Number . . .</h3>-->
                <div id="error4"></div>
                <input class="error4" type="text" name="pa_name" placeholder="Full Name" />
                <input class="error4" type="text" name="pa_rel" placeholder="Relationship" />
                <input class="error4" type="text" name="pa_dob" placeholder="Date Of Birth" />
                <input class="error4" type="text" name="pa_occu" placeholder="Occupation" />
                <input class="error4" type="text" name="pa_add" placeholder="HomeAddress"  />
                <input class="error4" type="text" name="pa_officeadd" placeholder="Offce Address"/>
                <input class="error4" type="email" name="pa_mail" placeholder="Email" />
                <input class="error4" type="number" name="pa_mobile" placeholder="Phone Number" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" rel="3" class="next action-button" value="Next" />
            </fieldset> 
            <fieldset>
                <h2 class="fs-title">Admission Information</h2>

                <div id="error3"></div>
                <?php
                $ad = $this->admin_number;
                ?>

                <div class="form_input">
                    <input class="error3 admin " type="text" name="admin_no" value="<?php if (isset($ad)) {
                    echo $ad;
                } ?>" placeholder="Admission Number" />

                    <select class="input-block-level admited_class error3"name="class">
                        <option data-countryCode="RU" selected="" value="7">CLASS ADMITTED</option>
                        <?php
                        foreach ($this->class as $key => $value) {
                            ?>
                            <option value="<?php echo $value["id"]; ?>" ><?php echo $value["code"]; ?></option>
                            <?php
                        }
                        ?>
                    </select> 
                    <select class="input-block-level admited_session error3 "name="session">
                        <option value="">Session Admitted</option>
                        <?php
                        foreach ($this->session as $key => $value) {
                            ?>
                            <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option>
                            <?php }
                        ?>

                    </select> 
                    <select class="input-block-level admited_term error3 "name="term">
                        <option value="">Term Admitted</option>
                        <?php
                        foreach ($this->term as $key => $value) {
                            ?>
                            <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option>

                            <?php
                        }
                        ?> 

                    </select> 
                </div>
                <div class="pix_wrapper">
                    <label class="selBanner"> <span class="glyphicon glyphicon-camera"></span>Profile Picture</label>
                    <div class="filley"><div id="prof_dp_edit"  class="prof_dp_edit"><img src="http://localhost/medslat/public/images/dp_edit.png"></div></div>
                    <!--<button class="selBanner btn btn-primary">Select Profile Picture</button>-->
                    <input  name="" type="file" class="input_banner" id="input_banner" />
                    <input  name="profile_pix" type="hidden" class="profile_pix input_banner" value="" id=" " />
                </div><div class="clear"> </div>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
        </form>
        <script src="<?php echo URL; ?>v/students/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo URL; ?>v/students/js/fm.datetator.jquery.js"></script>
  <!--<script src="<?php echo URL; ?>views/index/js/event.js"></script>-->
        <script src="<?php echo URL; ?>v/students/js/std.js"></script>
    </body> 
</html>
