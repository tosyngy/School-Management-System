<?php

class Studentsmod extends model {

    function __construct() {
        parent::__construct();
    }

    function view_students_personal() {
        return $this->db->select("select * from student_personal_details");
//     $sth= $this->db->select('SELECT Distinct a.st_id as id,a.admission_no,a.class_admmited,a.current_class,b.firstname,b.middlename,b.lastname,c.pix_name,b.gender,b.dob,b.birthplace,b.nationality,b.religion,e.home_address,e.city,e.state,e.phone_no,e.email,d.Fullname as Parent_name,d.relation as Relationship,d.dob as Parent_dob,d.occupation as Parent_occupation,d.email as Parent_email,d.mobile_no as Parent_mobile,d.office_address as Parent_office,d.home_address as Parent_home FROM `student_admission_details` as a,`student_personal_details` as b,`picture` as c,`parent_personal_details` as d,`student_contact_details` as e WHERE b.id =a.st_id AND user_id=b.id AND c.usertype="STD" AND d.st_id=b.id AND e.st_id=b.id');
//    return $sth;     
    }

    function view_students_contact() {
        return $this->db->select("select * from student_contact_details");
    }

    function view_students_picture() {
        return $this->db->select("select * from picture");
    }

    function update_students() {
        // $this->db->update("select * from subjects");
    }

    function submit() {
        $date_created = date("Y-m-d");
//        echo "Today is " . $date_created;
        $fn = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $middlename = $_POST["middlename"];
        $dateof = $_POST["dateof"];
        $placeof = $_POST["placeof"];
        $religion = $_POST["religion"];
        $sex = $_POST["sex"];
        $nation = $_POST["nation"];
        $address = $_POST["address"];
        $mobile = $_POST["mobile"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $mail = $_POST["mail"];
        $pa_relation = $_POST["pa_relation"];
        $pa_fullname = $_POST["pa_fullname"];
        $pa_occu = $_POST["pa_occu"];
        $pa_dateof = $_POST["pa_dateof"];
        $pa_officeadd = $_POST["pa_officeadd"];
        $pa_address = $_POST["pa_address"];
        $pa_mobile = $_POST["pa_mobile"];
        $pa_mail = $_POST["pa_mail"];
        $admited_class = $_POST["admited_class"];
        $admited_session = $_POST["admited_session"];
        $admited_term = $_POST["admited_term"];
        $admin_no = $_POST["admin_no"];
        $picture = $_POST["image"];
//        echo $fn;
//        echo $lastname;
//        echo $middlename;
//        echo $picture;
        $conda = array(
            'firstname' => $fn,
            'firstname' => $fn,
            'middlename' => $middlename,
            'lastname' => $lastname,
            'gender' => $sex,
            'dob' => $dateof,
            'birthplace' => $placeof,
            'nationality' => $nation,
            'religion' => $religion,
            'additional_date' => "$date_created",
            'status' => "0",
        );
        $inventid = $this->db->insert("student_personal_details", $conda);
//        print_r($inventid);
//        echo $inventid[0]['id'];
        $contact = array(
            'st_id' => $inventid[0]['id'],
            'home_address' => $address,
            'city' => $city,
            'state' => $state,
            'phone_no' => $mobile,
            'email' => $mail,
            'status' => "0",
        );

        $contact = $this->db->insert(" student_contact_details", $contact);
        $parent = array(
            'st_id' => $inventid[0]['id'],
            'Fullname' => $pa_fullname,
            'relation' => $pa_relation,
            'dob' => $pa_dateof,
            'occupation' => $pa_occu,
            'office_address' => $pa_officeadd,
            'home_address' => $pa_address,
            'email' => $pa_mail,
            'mobile_no' => $pa_mobile,
            'status' => "0",
        );
        $parent = $this->db->insert(" parent_personal_details", $parent);

        $admission = array(
            'st_id' => $inventid[0]['id'],
            'admission_no' => $admin_no,
            'class_admmited' => $admited_class,
            'current_class' => $admited_class,
            'session_admmited' => $admited_session,
            'current_session' => $admited_session,
            'term_admited' => $admited_term,
        );
        $this->db->insert("student_admission_details", $admission);
        $this->savefile($inventid[0]['id'], $picture, "STD");
//        echo 'success';
        $archive = array(
            'st_id' => $inventid[0]['id'],
            'admission_no' => $admin_no,
            'class' => $admited_class,
            'session' => $admited_session,
            'term' => $admited_term
        );
                $this->db->insert("students_archive", $archive);
        $sheet = array(
            'student_id' => $inventid[0]['id'],
            'class_id' => $admited_class,
            'session_id' => $admited_session,
            'term_id' => $admited_term
        );
        $this->db->insert("broad_sheet", $sheet);
//        $this->savefile($inventid[0]['id'], $picture, "STD");
        echo 'success';
    }

    public function getallterms() {
        $sql = "Select * from terms";
        return $result = $this->db->select($sql);
    }

    public function getallclass() {
        $sql = "Select * from classmap";
        return $result = $this->db->select($sql);
    }

    public function getallsession() {
        $sql = "Select * from sessions";
        return $result = $this->db->select($sql);
    }

    function worker() {
//        echo 'we';
        $date_created = date("Y-m-d");
//        echo "Today is " . $date_created;
        $fullname = $_POST["fullname"];
        $dob = $_POST["dob"];
        $sor = $_POST["sor"];
        $reli = $_POST["reli"];
        $childrens = $_POST["childrens"];
        $genda = $_POST["genda"];
        $marital = $_POST["marital"];
        $nationality = $_POST["nationality"];
        $address = $_POST["address"];
        $state = $_POST["state"];
        $city = $_POST["city"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $country = $_POST["country"];
        $salary = $_POST["salary"];
        $post = $_POST["post"];
        $category = $_POST["category"];
        $qualification = $_POST["qualification"];
        $experience = $_POST["experience"];
        $year_exp = $_POST["year_exp"];
        $picture = $_POST["pix"];
        $conda = array(
            'Fullname' => $fullname,
            'gender' => $genda,
            'marital_status' => $marital,
            'date_of_birth' => $dob,
            'State_of_origin' => $sor,
            'Religion' => $reli,
            'children_count' => $childrens,
            'nationality' => $nationality,
            'status' => "0",
        );
        $inventid = $this->db->insert("employee_personal_detail", $conda);
//        print_r($inventid);
        $contact = array(
            'emp_id' => $inventid[0]['id'],
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'mobile_phone' => $phone,
            'email' => $email,
            'country' => $country,
            'status' => "0",
        );
        $this->db->insert("employee_contact", $contact);
        $work = array(
            'emp_id' => $inventid[0]['id'],
            'emp_category' => $category,
            'qualification' => $qualification,
            'emp_position' => $post,
            'salary' => $salary,
            'year_experience' => $year_exp,
            'experience_details' => $experience,
            'Date_employee' => $date_created,
            'status' => "0",
        );
        $this->db->insert("employee_work_detail", $work);
        $this->savefile($inventid[0]['id'], $picture, "worker");
        echo 'success';
    }

   public function savefile($id, $file, $type) {
        $name = "";
        for ($i = 0; $i < 30; $i++) {
            $key = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
            $name.= $key [array_rand($key)];
        }

//        echo "name".$name;
//     $pix=$_POST['pix'];
////     echo $pix;
//   $uid = $id;

        if (file_put_contents("picture/" . $name."", "$file", FILE_USE_INCLUDE_PATH)) {

            if ($type === "STD") {
                $conda = array(
                    'user_id' => $id,
                    'pix_name' => $name,
                    'usertype' => "STD",
                    'status' => "0",
                );
                $conda2 = array(
//                    'user_id' => $id,
                    'pix_name' => $name,
//                    'usertype' => "STD",
                    'status' => "0",
                );
                $sql = "SELECT user_id FROM `picture` where  `usertype` ='STD' AND user_id = " . $id . " ";
               $result2 = $this->db->select($sql);
                if (count($result2)>0) {
//                       echo 'dd';
//                                             echo 'ss'.  count($result2);
//                                             echo $name;
                                             
                   $this->db->update("picture", $conda2, "user_id =$id and usertype='STD'");
//                   user_id=$id AND usertype =STD
                }
 else {
                 
                      echo 'ss'.  count($result2);
                    $this->db->insert("picture", $conda);
   
}
        
        
                
            } 
            
            elseif ($type === "worker") {
                $conda = array(
                    'user_id' => $id,
                    'pix_name' => $name,
                    'usertype' => "STAFF",
                    'status' => "0",
                );
                   $conda2 = array(
//                    'user_id' => $id,
                    'pix_name' => $name,
//                    'usertype' => "STD",
                    'status' => "4",
                );
                   
                $sql = "SELECT user_id FROM `picture` where  `usertype` ='STAFF' AND user_id = " . $id . " ";
               $result2 = $this->db->select($sql);
                if (count($result2)>0) {
//                       echo 'dd';
//                                             echo 'sst'.  count($result2);
//                                             echo $name;
                                             
                    $this->db->update("picture", $conda2, "user_id =$id and usertype='STAFF'");
//                   user_id=$id AND usertype =STD
                }
 else {
                 
                      echo 'ss'.  count($result2);
                 $this->db->insert("picture", $conda);
   
}
                
            }
        }
    }

    public function getadmissionnumber() {
        $date_year = date("Y");
//         $date_year="2011";

        $sql = "Select * from sessions where name like '" . $date_year . "%'";
        $result = $this->db->select($sql);
        $result[0]["name"];
        $id = $result[0]["id"];
        $sql = "SELECT st_id FROM `student_admission_details`where session_admmited = " . $id . " ORDER BY `student_admission_details`.`session_admmited` DESC ";
        $result2 = $this->db->select($sql);
        $nu = count($result2) + 1;
//       print_r($result2);
//       $result2[0]["st_id"];
//       $id =$result2[0]["st_id"]+1;
        $admission_number = $result[0]["name"] . "/";
        return $admission_number . $nu;
//        echo 'a'.$admission_number;
    }

    public function admin_no() {
        $id = $_POST["id"];
//         $date_year="2011";
        $sql = "Select * from sessions where id ='" . $id . "%'";
        $result = $this->db->select($sql);
        $result[0]["name"];
        $id = $result[0]["id"];
        $sql = "SELECT st_id FROM `student_admission_details`where session_admmited = " . $id . " ORDER BY `student_admission_details`.`session_admmited` DESC ";
        $result2 = $this->db->select($sql);
        $nu = count($result2) + 1;
//       print_r($result2);
//       $result2[0]["st_id"];
//       $id =$result2[0]["st_id"]+1;
        $admission_number = $result[0]["name"] . "/";
        echo $admission_number . $nu;
//        echo 'a'.$admission_number;
    }

    function students() {
    $sth= $this->db->select('SELECT Distinct  a.current_session,a.st_id as id,a.admission_no,a.class_admmited,a.current_class,b.firstname,b.middlename,b.lastname,c.pix_name,b.gender,b.dob,b.birthplace,b.nationality,b.religion,e.home_address,e.city,e.state,e.phone_no,e.email,d.Fullname as Parent_name,d.relation as Relationship,d.dob as Parent_dob,d.occupation as Parent_occupation,d.email as Parent_email,d.mobile_no as Parent_mobile,d.office_address as Parent_office,d.home_address as Parent_home FROM `student_admission_details` as a,`student_personal_details` as b,`picture` as c,`parent_personal_details` as d,`student_contact_details` as e WHERE b.id =a.st_id AND user_id=b.id AND c.usertype="STD" AND d.st_id=b.id AND e.st_id=b.id order by a.current_class');
    return $sth;
    }
    function filterByClass($class) {
    $sth= $this->db->select('SELECT Distinct a.st_id as id,a.admission_no,a.class_admmited,a.current_class,b.firstname,b.middlename,b.lastname,c.pix_name,b.gender,b.dob,b.birthplace,b.nationality,b.religion,e.home_address,e.city,e.state,e.phone_no,e.email,d.Fullname as Parent_name,d.relation as Relationship,d.dob as Parent_dob,d.occupation as Parent_occupation,d.email as Parent_email,d.mobile_no as Parent_mobile,d.office_address as Parent_office,d.home_address as Parent_home FROM `student_admission_details` as a,`student_personal_details` as b,`picture` as c,`parent_personal_details` as d,`student_contact_details` as e WHERE b.id =a.st_id AND user_id=b.id AND c.usertype="STD" AND d.st_id=b.id AND e.st_id=b.id AND a.current_class='.$class);
    return $sth;
    }

    
    
    
      function promote(){ 
       $id=$_POST["id"];
       $new_class=$_POST["new_class"];
       $new_session=$_POST["new_session"];
       $adm=$_POST["adm"];
       $array = array("current_class" => "$new_class","current_session" => "$new_session");
       echo $this->db->update("student_admission_details", $array, "st_id=$id");
       
         
                $archive = array(
                   'st_id' => $id,
                    'admission_no' => $adm,
                    'session' => $new_session,
                    'class' => $new_class,
                    'term' =>"1"
        );
        $this->db->insert("students_archive", $archive);
               $sheet = array(
            'student_id' => $id,
            'class_id' => $new_class,
            'session_id' => $new_session,
            'term_id' => "1"
        );
        $this->db->insert("broad_sheet", $sheet);
       
    }
     function update(){ 
       $std_pname=$_POST["std_pname"];
       $std_pmail=$_POST["std_pmail"];
  
       $std_pmobile=$_POST["std_pmobile"];
       $std_mobile=$_POST["std_mobile"];
       $std_home=$_POST["std_home"];
       $std_ln=$_POST["std_ln"];
       $std_mn=$_POST["std_mn"];
       $std_fn=$_POST["std_fn"];
       $std_dob=$_POST["std_dob"];
       $id=$_POST["id"];
       $personal = array(
           "firstname" => "$std_fn",
           "middlename" => "$std_mn",
           "lastname" =>$std_ln,
           "dob" => "$std_dob"
       );
       $contact = array(
           "home_address" => $std_home,
           "phone_no" => $std_mobile
    );
       $parent= array(
           "Fullname" => "$std_pname",
           "mobile_no" => $std_pmobile,
           "email" => "$std_pmail",
         
       );
       echo $this->db->update("student_personal_details",$personal , "id=$id");
       echo $this->db->update("student_contact_details", $contact, "st_id=$id");
       echo $this->db->update("parent_personal_details", $parent, "st_id=$id");
    
       
       
    }
    
      function updateImage(){ 
 
       $file=$_POST["pix"];
       $type=$_POST["type"];
       $id=$_POST["id"];
       
      
       $this->savefile($id, $file, $type);
       
    }
}
