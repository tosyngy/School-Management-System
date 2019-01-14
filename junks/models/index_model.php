<?php

class Index_model extends Model {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        
    }

    function submit() {
        $date_created = date("Y-m-d");
        echo "Today is " . $date_created;
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
        echo $fn;
        echo $lastname;
        echo $middlename;
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
        print_r($inventid);
        echo $inventid[0]['id'];
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
            'session_admmited' => $admited_session,
            'term_admited' => $admited_term,
        );
        $this->db->insert("student_admission_details", $admission);
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
        echo 'we';
        $date_created = date("Y-m-d");
        echo "Today is " . $date_created;
        $fullname = $_POST["fullname"];
        $dob= $_POST["dob"];
        $sor= $_POST["sor"];
        $reli= $_POST["reli"];
        $childrens= $_POST["childrens"];
        $genda= $_POST["genda"];
        $marital= $_POST["marital"];
        $nationality= $_POST["nationality"];
        $address= $_POST["address"];
        $state= $_POST["state"];
        $city= $_POST["city"];
        $phone= $_POST["phone"];
        $email= $_POST["email"];
        $country= $_POST["country"];
        $salary= $_POST["salary"];
        $post= $_POST["post"];
        $category= $_POST["category"];
        $qualification= $_POST["qualification"];
        $experience= $_POST["experience"];
        $year_exp= $_POST["year_exp"];
       $conda = array(
            'Fullname' => $fullname,
            'gender' => $genda,
            'marital_status' => $marital,
            'date_of_birth' => $dob,
            'State_of_origin' =>$sor,
            'Religion' => $reli,
            'children_count' => $childrens,
            'nationality' => $nationality,
          'status' => "0",
        );
        $inventid = $this->db->insert("employee_personal_detail", $conda);
        print_r($inventid);
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
    }
}
