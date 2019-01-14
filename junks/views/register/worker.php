<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL; ?>views/index/css/fm.datetator.jquery.css"/>
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
                overflow: hidden;
            }
            /*form styles*/
            #msform {
                width: 100%;
                margin: 0px auto;
                text-align: center;
                position: relative;
                height: 50%;
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
                color: #fff;
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
                color: #333;
                background: white;
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
                <li>WORK INFORMATION</li>
              
            </ul>
            <!-- fieldsets -->

            <fieldset>
                <h2 class="fs-title">Basic Information</h2>
                <!--<h3 class="fs-subtitle">Choose a Username . . .</h3>-->
                <div id="error"></div>

                <input class="error" type="text" name="fn" placeholder="Full Name"/>
<!--                <input class="error" type="text" name="md" placeholder="MiddleName"/>
                <input id="em" class="error" type="text" name="ln" placeholder="LastName"/>-->
             
                    <select class="input-block-level genda"name="gendar">
                        <option value="">GENDER</option>
                        <option value="male">MALE</option>
                        <option value="female">FEMALE</option>
                    </select> 
                    <select class="input-block-level marital"name="marital">
                        <option value="">MARITAL STATUS</option>
                        <option value="single">SINGLE</option>
                        <option value="married">MARRIED</option>
                    </select> 
                <input id="em" class="dateofbirth error" type="date" name="dob" placeholder="Date Of Birth"/>
                 <input id="em" class="error " type="text" name="sor" placeholder="State Of Origin"/>
                
                  <select class="input-block-level nationality"name="nation">
                        <option value="">Nationality</option>
                        <option value="nigeria">Nigeria</option>
                        <option value="cameroon">Cameron</option>
                    </select>
                 <input class="error" type="text" name="religion" placeholder="Religion" />
                 <input class="error" type="number" name="childre" placeholder="Number Of Children" />
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
                 <select class="input-block-level country"name="nation">
                        <option value="">Country</option>
                        <option value="nigeria">Nigeria</option>
                        <option value="cameroon">Cameron</option>
                    </select>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" rel="2" class="next action-button" value="Next" />
            </fieldset>  
                
            <fieldset>
                <h2 class="fs-title">Work Information</h2>
              
                <div id="error3"></div>
                 <select class="input-block-level category"name="category">
                        <option value="">Category</option>
                        <option value="Teaching">Teaching</option>
                        <option value="non-Teaching">non-Teaching</option>
                    </select>
                 <select class="input-block-level qualification"name="qualification">
                        <option value="">qualification</option>
                        <option value="OND">OND</option>
                        <option value="HDN">HND</option>
                        <option value="NCE">NCE</option>
                        <option value="BSC">BSC</option>
                    </select>
                <input class="error2 sala" type="number" name="salary" placeholder="Salary" />
                <input class="error2 post" type="text" name="post" placeholder="Post" />
                <input class="error2 year_exp" type="number" name="year" placeholder="Year Of Experience" />
                <input class="error2 exp" type="text" name="exp" placeholder="Experience" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
        </form>
       <script src="<?php echo URL; ?>views/index/js/jquery-2.1.4.min.js"></script>
       <script src="<?php echo URL; ?>views/index/js/fm.datetator.jquery.js"></script>
 <!--<script src="<?php echo URL; ?>views/index/js/event.js"></script>-->
        <script src="<?php echo URL; ?>views/index/js/worker.js"></script>
    </body> 
</html>

