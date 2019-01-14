<link rel="stylesheet" href="<?php echo URL; ?>v/students/css/index.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>v/students/css/animate.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>v/students/css/fm.datetator.jquery.css"/>
<?php
$students_personal = array();
$classmap = array(
    "Primary 1",
    "Primary 2",
    "Primary 3",
    "Primary 4",
    "Primary 5",
    "Primary 6",
    "JSS 1",
    "JSS 2",
    "JSS 3",
    "SSS 1",
    "SSS 2",
    "SSS 3"
);
//$students_contacts = $this->students_contacts;
//$students_picture = $this->students_picture;
$allStudents = $this->allStudents;
//print_r($allStudents[0]);
$index = 0;
//$toUse=  json_encode($allStudents);
//$allStudents = array();
?>

<div class="wrap mar_top">
    <div class="table table-hover table-responsive ">          
        <table class="table poll">
            <thead>
                <tr>
                    <th>Admission No.</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Class</th>
                    <!--<th>SESSION</th>-->

                </tr>
            </thead>
            <tbody class="table_body">
                <?php
                foreach ($allStudents as $student) {
                    $fullname = $student["firstname"] . " " . $student["middlename"] . " " . $student["lastname"];
                    $pix_link = URL . "picture/show/" . $student['pix_name'];
//    echo file_get_contents($pix_link);
                    ?>
                    <!--<div class="list_item" id="list_item1">-->

                    <tr class="list_it_selector" pix='<?php echo file_get_contents($pix_link); ?>' id="list_item4" std_id='<?php echo json_encode($student); ?>'>
                            <!--<img src="<?php // echo file_get_contents($pix_link);           ?>" alt="Student Image">-->
                        <!--<div class="list_label">-->
                        <td  ><?php echo $student['admission_no']; ?></td> 
                        <td  >      <?php echo $fullname; ?>       </td>
                        <td  ><?php echo $student['gender']; ?></td>
                        <td  ><?php echo $student['phone_no']; ?></td>
                        <td  ><?php echo $classmap[$student['current_class'] - 1]; ?></td>  

                    </tr>
                    <?php
                    $index++;
                }
                ?>


            </tbody>
        </table>
    </div> 
</div>





<!--<div class="list_container">-->

<!--</div>-->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">  <span id="my_surname"></span>  <span id="my_first"></span>  </h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-3 col-lg-3 " align="center" id="my_img"><img id="std_id_to_display" src="<?php echo URL; ?>v/students/img/2.jpg" alt="item1" style="height: 120px; width: 100px"></div>
                        <div class="col-md-9 col-lg-9 " align="left" id="my_img">
                            <table class="table table-user-information">
                                <tbody>
<!--                                    <tr>
                                        <td>surname</td>
                                        <td id="my_surname"></td>
                                    </tr>
                                    <tr>
                                        <td>first name</td>
                                        <td id="my_first"></td>
                                    </tr>-->
                                    <tr>
                                        <td>middle name</td>
                                        <td id="my_last"></td>
                                    </tr>
                                    <tr>
                                        <td>Admission number</td>
                                        <td id="my_adno"></td>
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
                                <td>class</td>
                                <td id="my_class"></td>
                            </tr>
                            <tr>
                                <td>D.O.B</td>
                                <td id="my_dob"></td>
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
                                <td>Home address</td>
                                <td id="my_had"></td>
                            </tr>
                            <tr>

                            </tr>
                            <tr>
                                <td>guardian(s) name</td>
                                <td id="my_pname"></td>
                            </tr>
                            <tr>
                                <td>Relationship</td>
                                <td id="my_prel"></td>
                            </tr>



                            <tr>
                                <td>occupation</td>
                                <td id="my_pocu"></td>
                            </tr>





                            <tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-success promote_student" curr_class="" std_id="" adm=""  curr_session="" style="float: left">Promote</button>

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


            </div>
        </div>
    </div>
</div>
<script>
//var  studentList=
    $(document).on("click", ".list_it_selector", function () {


        var data = $(this).attr("std_id");
//        alert(data);
        var pix = $(this).attr("pix");

        data = JSON.parse(data)
        var current_class = data["current_class"]
        var current_session = data["current_session"]

//        alert(current_session);
//        alert(pix);


        $('#std_id_to_display').attr("src", pix);
        $('#my_surname').text("")
        $('#my_surname').text(data["firstname"]);



        $('#my_first').text("")
        $('#my_first').text(data["middlename"]);




        $('#my_last').text("")
        $('#my_last').text(data["lastname"]);




        $('#my_gender').text("")
        $('#my_gender').text(data["gender"]);



        $('#my_dob').text("")
        $('#my_dob').text(data["dob"]);




        $('#my_rel').text("")
        $('#my_rel').text(data["religion"]);




        $('#my_state').text("")
        $('#my_state').text(data["state"]);




        $('#my_nat').text("")
        $('#my_nat').text(data["nationality"]);




        $('#my_had').text("")
        $('#my_had').text(data["home_address"]);



        $('#my_email').text("")
        $('#my_email').text(data["email"]);




        $('#my_adno').text("")
        $('#my_adno').text(data["admission_no"]);





        $('#my_class').text("")
        $('#my_class').text(data["current_class"]);




        $('#my_pname').text("")
        $('#my_pname').text(data["Parent_name"]);




        $('#my_prel').text("")
        $('#my_prel').text(data["Relationship"]);




        $('#my_pocu').text("")
        $('#my_pocu').text(data["Parent_occupation"]);



        $(".promote_student").attr("curr_class", "" + data["current_class"] + "");
        $(".promote_student").attr("std_id", "" + data["id"] + "");
        $(".promote_student").attr("adm", "" + data["admission_no"] + "");
        $(".promote_student").attr("curr_session", "" + data["current_session"] + "");


        $('#myModal').modal({
            show: 'true'
        });

    })


            ;
    $(document).on("click", ".promote_student", function () {
        var id = $(this).attr("std_id");
        var curr_class = $(this).attr("curr_class");
        var adm = $(this).attr("adm");
        var curr_session = $(this).attr("curr_session");
        var new_class = parseInt(curr_class) + 1;
        var new_session = parseInt(curr_session) + 1;
//        alert("clicked")
//        alert(id);
//        alert(curr_class);
//        alert(new_class);

        $.post("http://localhost/school/students/promote", {id: id, new_class: new_class, adm: adm, new_session: new_session}, function (resp) {
//alert(resp);
            location.reload(true);

        });








    });
</script>