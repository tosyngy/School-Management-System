<?php
$payments=$this->payments;
//print_r($payments);
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

                width: 18%;
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
   
       
        <div class="wrap mar_top">
            <div class="table table-hover table-responsive ">          
                <table class="table poll">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>CLASS</th>
                            <th>FIRST TERM</th>
                            <th>SECOND  TERM</th>
                            <th>THIRD  TERM</th>
                            <!--<th>SESSION</th>-->
                            
                        </tr>
                    </thead>
                    <tbody class="table_body">
           <?php 
                        if (isset($payments)) {


//                            echo 'sjsj';
    $size = sizeof($payments);
//    echo $size;
    for ($index = 0; $index < $size; $index++) {
        $class = $payments[$index]["class"];
        $first = $payments[$index]["1st"];
        $second = $payments[$index]["2nd"];
       $third =$payments[$index]["3rd"];
 $id=$index+1;
        echo '  <tr>
                            <td>'.$id.'</td>
                            <td>'.$class.'</td>
                            <td>'.$first.'</td>
                            <td>'.$second.'</td>
                            <td>'.$third.'</td>
                           
                        </tr>';
    }
}
                        ?>
                      
                      
                    </tbody>
                </table>
            </div> 
        </div>
    
        <script src="<?php echo URL; ?>v/payment/js/payment.js"></script>
        <script src="<?php echo URL; ?>v/payment/js/jquery.tabledit.js"></script>
  <!--<script src="<?php echo URL; ?>views/index/js/event.js"></script>-->
        <!--<script src="<?php echo URL; ?>v/employee/js/worker.js"></script>-->
        
        <script>
       
//    editButton: false,
//    deleteButton: false,
//    hideIdentifier: true,
//   





$('.poll').Tabledit({
    url: 'http://localhost/school/payment/changeClassPayments',
    deleteButton: false,
    columns: {
        identifier: [0, 'id'],
        editable: [[2, 'first'], [3, 'second'],[4, 'last']]
    },
    onDraw: function() {
        console.log('onDraw()');
    },
    onSuccess: function(data, textStatus, jqXHR) {
        console.log('onSuccess(data, textStatus, jqXHR)');
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
    },
    onFail: function(jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    },
    onAlways: function() {
        console.log('onAlways()');
    },
    onAjax: function(action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
    }
});




        
        </script>
        
        
        
        
        
    </body> 
</html>