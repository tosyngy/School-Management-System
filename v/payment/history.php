<?php
$history = $this->history;
//print_r($history);
 $t =$this->class;
//echo $t[0]['code'];
//echo $t[1]['code'];

 



if (isset($history)) {



    $size = sizeof($history);
//    echo $size;
    for ($index = 0; $index < $size; $index++) {
        $firstname = $history[$index]["firstname"];
        $middlename = $history[$index]["middlename"];
        $lastname = $history[$index]["lastname"];
        $No =$index+1;
        $Student=$firstname ." ".$middlename ." ".$lastname;
        $Session =$history[$index]["session"];
        $Term=$history[$index]["term"];
        $Amount =$history[$index]["amount"];
        $Date =$history[$index]["date"];
        $Time =$history[$index]["time"];
     
    }
}
?>
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
            .wrap{
                margin-top: 5%;
            }
            .filter_item{
                float: left;

                width: 15%;
                ;
                margin: 7px;
            }
            .filter_item2{
                float: right;

                width: 11%;
                ;
                margin: 7px;
            }
        </style>


        <script>

        </script>
    </head>
    <body>
        <div class="filter_box">
            <div class="filter_item">
                <input class="allchecked" type="checkbox" name="All" value="All_History">All History<br> 
            </div>
            <div class="filter_item">
                <div filter>
                    <input class="form-control term" list="term" name="terms" placeholder="SEARCH BY TERM">
                    <datalist id="term">
                        <option value="First Term">
                        <option value="Second Term">
                        <option value="Third Term">
                    </datalist>
                </div> 
            </div>
            <div class="filter_item">
                <div filter>
                    <input class="form-control session" list="session" name="session" placeholder="SEARCH BY SESSION">
                    <datalist id="session">
                         <?php
                       
                        foreach ($this->session as $key => $value) {
                            ?>
                             
                            <option value="<?php echo $value["name"]; ?>">
                            
                            <?php }
                        ?>
<!--                      <option value="2015/2016">
                      <option value="2015/2016">
                      <option value="2015/2016">-->
                    </datalist>
                </div>    
            </div>
            <div class="filter_item">
                <div filter>
                    <input class="form-control myclass" list="term" name="terms" placeholder="SEARCH BY CLASS">
                    <datalist id="term">
                        <?php 
                            foreach ($this->class as $key => $value) {
                            ?>
                           <option <?php echo $value["code"]; ?>>  
                            <?php
                        }
                        ?> 
                        
<!--                        <option value="Primary 2">
                        <option value="Primary 3">-->
                    </datalist>
                </div>   
            </div>
            <div class="filter_item">
                <input class="reg_no form-control "type="text" placeholder="REGISTRATION NUMBER"> 
            </div>
            <div class="filter_item2">
                <button  type="button" class="btn btn-info search_btn">SEARCH</button>
            </div>


        </div>
        <div class="wrap">
            <div class="table table-hover table-responsive ">          
                <table class="table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Student Name</th>
                            <th>Admission NUmber</th>
                            <th>Session</th>
                            <th>Term</th>
                            <th>Amount Paid</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody class="table_body">
                        <?php 
                        if (isset($history)) {



    $size = sizeof($history);
//    echo $size;
    for ($index = 0; $index < $size; $index++) {
        $firstname = $history[$index]["firstname"];
        $middlename = $history[$index]["middlename"];
        $lastname = $history[$index]["lastname"];
        $No =$index+1;
        $Student=$firstname ." ".$middlename ." ".$lastname;
        $Session =$history[$index]["session"];
        $Term=$history[$index]["term"];
        $Amount =$history[$index]["amount"];
        $Date =$history[$index]["date"];
        $Time =$history[$index]["time"];
        $admin_no =$history[$index]["addmission_number"];
//        echo $No;
//        echo $Student;
//        echo  $Session;
//        
//        echo $Term;
//        echo $Amount;
//        echo $Date;
//        echo $Time;
        echo '  <tr>
                            <td>'.$No.'</td>
                            <td>'.$Student.'</td>
                            <td>'.$admin_no.'</td>
                            <td>'.$Session.'</td>
                            <td>'.$Term.'</td>
                            <td>'.$Amount.'</td>
                            <td>'.$Date.'</td>
                            <td>'.$Time.'</td>
                        </tr>';
    }
}
                        ?>
                      
                      
                    </tbody>
                </table>
            </div> 
        </div>
    
        <script src="<?php echo URL; ?>v/payment/js/payment.js"></script>
  <!--<script src="<?php echo URL; ?>views/index/js/event.js"></script>-->
        <!--<script src="<?php echo URL; ?>v/employee/js/worker.js"></script>-->
    </body> 
</html>
