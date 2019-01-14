 
<?php

$employee_info = $this->employee_info;
//$employee_work = $this->employee_work;
//$employee_contacts = $this->employee_contact;
//$employee_picture = $this->employee_picture;
//echo 'manage employee';
//print_r($employee_info);
//print_r($employee_personal);
//print_r($employee_contacts);
?>
<div class="wrap mar_top">
    <div class="table table-hover table-responsive ">          
        <table class="table poll">
            <thead>
                <tr>
                    <!--<th>S/N</th>-->
                    <th>FULL NAME</th>
                    <th>CATEGORY</th>
                    <th>QUALIFICATION</th>
                    <th>ADDRESS</th>
                    <th>GENDER</th>
                    <th>RELIGION</th>
                    <!--<th>SESSION</th>-->

                </tr>
            </thead>
            <tbody class="table_body">
                <?php
                $index = 0;
                foreach ($employee_info as $emp) {
                    $fullname = $emp["Fullname"];
                    $pix_link = URL . "picture/show/" . $emp['pix_name'];
//    echo file_get_contents($pix_link);
                    ?>
                    <!--<div class="list_item" id="list_item1">-->

                    <tr class="list_it_selector" pix='<?php echo file_get_contents($pix_link); ?>' id="list_item4" std_id='<?php echo json_encode($emp); ?>'>
                            <!--<img src="<?php // echo file_get_contents($pix_link);          ?>" alt="Student Image">-->
                        <!--<div class="list_label">-->
                         <td  >      <?php echo $fullname; ?>       </td>
                        <td  ><?php echo $emp['emp_category']; ?></td> 
                       
                        <td  ><?php echo $emp['qualification']; ?></td>
                        <td  ><?php echo $emp['address']; ?></td>
                        <td  ><?php echo $emp['gender']; ?></td>
                        <td  ><?php echo $emp['Religion']; ?></td>
                         

                    </tr>
                    <?php
                    $index++;
                }
                ?>


            </tbody>
        </table>
    </div> 
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-3 col-lg-3 " align="center" id="my_img"><img id="std_id_to_display" src="<?php echo URL; ?>v/students/img/2.jpg" alt="item1" style="height: 120px; width: 100px"></div>
                        <div class="col-md-9 col-lg-9 " align="left" id="my_img">
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Full Name</td>
                                        <td id="my_fullname"></td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td id="my_cat"></td>
                                    </tr>
                                    <tr>
                                        <td>Qualification</td>
                                        <td id="my_qua"></td>
                                    </tr>
                                    <tr>
                                        <td>Year Of Experience</td>
                                        <td id="my_exp"></td>
                                    </tr>
                                    <tr>
                                        <td>Salary</td>
                                        <td id="my_salary"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <table class="table table-user-information">
                        <tbody>
                            <tr>
                                <td>Gender</td>
                                <td id="my_gender"></td>
                            </tr>
  <tr>
                                <td>D.O.B</td>
                                <td id="my_dob"></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td id="my_add"></td>
                            </tr>
                          
                            <tr>
                                <td>Religion</td>
                                <td id="my_rel"></td>
                            </tr>
                            <tr>
                                <td>State of origin</td>
                                <td id="my_state"></td>
                            </tr>
                            <tr>
                                <td>Nationalty</td>
                                <td id="my_nat"></td>
                            </tr>
                            <tr>
                                <td>Email Address</td>
                                <td id="my_email"></td>
                            </tr>
                            <tr>

                            </tr>
                          





                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<script>
//var  studentList=
    $(document).on("click", ".list_it_selector", function () {

        var data = $(this).attr("std_id");
//          alert(data);
        var pix = $(this).attr("pix");

        data = JSON.parse(data)


//        alert(data);
//        alert(pix);


        $('#std_id_to_display').attr("src",pix);
        $('#my_fullname').text("")
        $('#my_fullname').text(data["Fullname"]);
        $('#myModalLabel').text(data["Fullname"]+"' "+"PROFILE");



        $('#my_cat').text("")
        $('#my_cat').text(data["emp_category"]);




        $('#my_exp').text("")
        $('#my_exp').text(data["year_experience"]);




        $('#my_qua').text("")
        $('#my_qua').text(data["gender"]);



        $('#my_dob').text("")
        $('#my_dob').text(data["date_of_birth"]);




        $('#my_salary').text("")
        $('#my_salary').text(data["salary"]);



 
        $('#my_gender').text("")
        $('#my_gender').text(data["gender"]);




        $('#my_dob').text("")
        $('#my_dob').text(data["date_of_birth"]);



 
        $('#my_add').text("")
        $('#my_add').text(data["address"]);



        $('#my_rel').text("")
        $('#my_rel').text(data["Religion"]);



 
        $('#my_state').text("")
        $('#my_state').text(data["State_of_origin"]);





        


        $('#my_nat').text("")
        $('#my_nat').text(data["country"]);




        $('#my_email').text("")
        $('#my_email').text(data["email"]);

 





        $('#myModal').modal({
            show: 'true'
        });

    });
</script>