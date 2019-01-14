<?php

class Admin_Model extends model {

    function __construct() {
        parent::__construct();
    }
    public function getCourses() {
          $v = $this->db->select("select course from students_details");
        $all_course = array();
//        $all_course = array();
        foreach ($v as $tee => $vee) {
            $vee = $vee["course"];
//            echo $vee;
            if ($vee == ""){
                $vee = 'UnCategorized';
            }
            if (!in_array($vee, $all_course)) {
                array_push($all_course, $vee);
            }
        }
        return $all_course;
    }
    public function summary(){
        $v = $this->db->select("select course from students_details");
        $all_course = array();
//        $all_course = array();
        foreach ($v as $tee => $vee) {
            $vee = $vee["course"];
//            echo $vee;
            if ($vee == ""){
                $vee = 'UnCategorized';
            }
            if (!in_array($vee, $all_course)) {
                array_push($all_course, $vee);
            }
        }
        $val = $this->db->select("select state from students_details");
        $all_state = array();
        $resp = array();
        foreach ($val as $tee => $vee) {
            $vee = $vee["state"];
//            echo $vee;
            if ($vee == "") {
                $vee = 'UnCategorized';
            }
            if (!in_array($vee, $all_state)) {
                array_push($all_state, $vee);
            }
        }
        foreach ($all_state as $one) {
//            echo $one."<br>";
            if ($one == "UnCategorized") {
                $one = "";
                $keyye = "UnCategorized";
            } else {
                $keyye = $one;
            }
            $stateInfo = array();
            foreach ($all_course as $cee) {
                $stateInfo[$cee] = 0;
            }
            $val = $this->db->select("select *  from students_details where state='" . $one . "'");
            foreach ($val as $pin) {
//                echo $pin["utme_reg"] . '  ' . $keyye . '<br>';
                $course = $pin["course"];
                if ( $course =="") {
                $course = "UnCategorized"    ;
                }
                $stateInfo[$course]+=1;
//                //                print_r(array_keys($pin));
//                echo $pin['state'];
//                print_r($pin);
            }
            $resp[$keyye] = $stateInfo;
//                    echo "<br>";
//            print_r($stateInfo);
        }
//        $resp = json_encode($resp);
//        echo($resp);
//        print_r($resp);
        return $resp;
    }

    public function statistics() {
        $val = $this->db->select("select state from students_details");
        $all_state = array();
        $resp = array();
        foreach ($val as $tee => $vee) {
            $vee = $vee["state"];

            if ($vee == "") {
                $vee = 'UnCategorized';
            }
            if (!in_array($vee, $all_state)) {
                array_push($all_state, $vee);
            }
        }
        foreach ($all_state as $one) {
            if ($one == "UnCategorized") {
                $one = "";
                $keyye = "UnCategorized";
            } else {
                $keyye = $one;
            }
            $val = $this->db->select("select *  from students_details where state='" . $one . "'");
//        print_r($val);
            $resp[$keyye] = $val;
        }
//        $resp = json_encode($resp);
//        echo($resp);
        return $resp;
    }

    public function course() {

        $val = $this->db->select("select course from students_details");
        $all_state = array();
        $resp = array();
        foreach ($val as $tee => $vee) {
            $vee = $vee["course"];

            if ($vee == "") {
                $vee = 'UnCategorized....  no department yet';
            }
            if (!in_array($vee, $all_state)) {
                array_push($all_state, $vee);
            }
        }
        foreach ($all_state as $one) {
            if ($one == "UnCategorized....  no department yet") {
                $one = "";
                $keyye = "UnCategorized....  no department yet";
            } else {
                $keyye = $one;
            }
            $val = $this->db->select("select *  from students_details where course='" . $one . "'");
//        print_r($val);
            $resp[$keyye] = $val;
        }
//        $resp = json_encode($resp);
//        echo($resp);
        return $resp;
    }

    function get_students() {
        $val = $this->db->select("select *  from students_details");
        return $val;
    }

    function get_students_admitted() {
        $param = array(
            ':st' => 1
        );
        $val = $this->db->select("SELECT * FROM students_details WHERE (status=:st)", $param);
        return $val;
    }

    function get_students_pending() {
        $param = array(
            ':st' => 0
        );
        $val = $this->db->select("SELECT * FROM students_details WHERE (status=:st)", $param);
        return $val;
    }

    function get_students_deffered() {
        $param = array(
            ':st' => 2
        );
        $val = $this->db->select("SELECT * FROM students_details WHERE (status=:st)", $param);
        return $val;
    }

    public function student_info($id) {

        $param = array(
            ':ID' => $id
        );
        $sql = $this->db->select("SELECT * FROM students_details WHERE (ID=:ID)", $param);
//    
        echo json_encode($sql);
    }

    public function student_info_update($id, $status) {


        $array = array("status" => "$status");
        $this->db->update("students_details", $array, "ID=$id");
    }

    public function admin_login() {


        $username = $_POST['username_admin'];
        $password = $_POST['pass'];
        //  echo "$username";
        $val = $this->db->select("select * from admin ");

        foreach ($val as $key => $value) {
//            echo "connected";
            if ($username == $value['username'] && $password == $value['pass']) {
                $name = "1";
                @session_start();

                $_SESSION["admin_id"] = $value["id"];

                echo $name;
                return FALSE;
            }
        }
        echo "0";
    }

    function logout() {
        session_destroy();
//        echo 'logged out';
        header("Location: http://localhost/student_reporting/admin");
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
///lupuzzz
    
    function view_students_personal() {
         return $this->db->select("select * from student_personal_details");
         
    }   
      function view_students_contact() {
         return $this->db->select("select * from student_contact_details");
         
    }   
      function view_students_picture() {
         return $this->db->select("select * from pictures");
         
    } 
       function update_students() {
         // $this->db->update("select * from subjects");
         
    }
    
    
}




















////////lupuzz


