<html>
    <head>
        <title>Add Employee</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL; ?>v/employee/css/fm.datetator.jquery.css"/>

        <!--<link rel="stylesheet" href="style.css"/>-->  
<!--        <script src="./public/tab_resour/jquery-1.js"></script> 
 
        <script src="./public/tab_resour/std.js"></script> 
        -->

        <style>

            .clear{
                clear: both;
            }
            .op{
                margin-bottom: 17px;
            }
            .wrappeer{
                margin-left: auto;
                /*                margin-right: auto;*/
                /*margin-right: 14%;*/
                width: 50%;
                /*background-color: red;*/
                margin-top: 10%;
                /*height: 90%;*/
                height: 367px;
                /*           width: 400px;
                height: 250px;*/

                border: 1px #888888 solid;

                -moz-box-shadow: -1px 0px 3px 2px #888888;
                -webkit-box-shadow: -1px 0px 3px 2px #888888;
                box-shadow: -1px 0px 3px 2px #888888;
                float: right;

            }
            .filter_item{
                float: left;
                width: 18%;
                margin: 7px;
            }
            #my_form{
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 39px;
            }
            .filter_item2{
                float: right;
                width: 11%;
                margin: 7px;
            }
            .makepayment{
                margin-left: 179px;;
            }
            .heade{
                text-align: center;
                font-weight: bold;
                font-size: 14px;
            }
            .myside{
                /*                width: 50%;*/
                float: left;
                margin-left: auto;
                margin-right: auto;
                width: 35%;
                margin-top: 10%;
                height: 367px;
                border: 1px solid #888;
                box-shadow: -1px 0px 3px 2px #888;
                display: none;

            }
            .inner{

                width: 90%;
                margin-top: 7%;
                margin-left: auto;
                margin-right: auto;
            }
            .image_container{
                width: 215px;
                height: 166px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 10px;
                border: 2px #888888 solid;

            }
            .image_container img{
                width: 215px;
                height: 166px;
            }
        </style>


        <script>

        </script>
    </head>
    <body>
        <div class="myside">
            <div class="inner">
                <div class="image_container">
                    <img class="mydp" src="../menu/.">
                </div>
                <div class="form-group">

                    <input type="text" class="form-control" id="rfirstname">
                </div>
                <div class="form-group">

                    <input type="text" class="form-control" id="rlastname">
                </div>
                <div class="form-group">

                    <input type="text" class="form-control" id="raddnumber">
                </div>

            </div>
        </div>
        <div class="wrappeer">

            <div class="heade">RECORD STUDENT PAYMENT</div>
            <form id="my_form" role="form">

                <div class="form-group">

                    <input type="text" class="form-control adnumberss " id="adnumber"placeholder="admmission_Number">
                </div>
                <div class="form-group">

                    <input type="number" class="form-control" id="amount"placeholder="Amount">
                </div>
                <select class="form-control op" id="class">
                    <?php
                    foreach ($this->class as $key => $value) {
                        ?>
                        <option value="<?php echo $value["id"]; ?>" ><?php echo $value["code"]; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <select class="form-control op" id="term">
                    <?php
                    foreach ($this->term as $key => $value) {
                        ?>
                        <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option>

                        <?php
                    }
                    ?> 
                </select>
                <select class="form-control op" id="session">
                    <?php
                    foreach ($this->session as $key => $value) {
                        ?>
                        <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option>
                    <?php }
                    ?>
                </select>
                <button type="submit" class="btn btn-default makepayment">MAKE PAYMENT</button>
            </form>
        </div>


        <script src="<?php echo URL; ?>v/payment/js/payment.js"></script>
    </body> 
</html>
