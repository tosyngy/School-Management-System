<?php

class Loginmod extends model {

    function __construct() {
        parent::__construct();
    }

    function login() {
//        if (isset($_POST['username']))
//        {
//where Jamb_Reg_No=:user", array(':user' => $username)
        //  print_r($_POST);

        $username = $_POST['username'];
        $password = $_POST['password'];
        //  echo "$username";
        $val = $this->db->select("select * from students_details ");

        foreach ($val as $key => $value) {
//            echo "connected";
            if ($username == $value['email'] && $password == $value['utme_reg']) {
                $name = "1";
                @session_start();
                
                $_SESSION["id"] = $value["ID"]; //id
                $_SESSION["admission_status"] = $value["status"]; //id
                
                $_SESSION["name"] = $value["firstname"]; //name
                $_SESSION["username"] = $username; //email
                $_SESSION["reg_num"] = $password; //jamb num
                $_SESSION["paid_status"] = $value["paid_status"]; //jamb num
                $_SESSION["course"] = $value["course"]; //jamb num
                echo $name;
                return FALSE;
            }
        }
        echo "0";
    }

    function logout(){
        session_destroy();
//        echo 'logged out';
        header("Location: http://localhost/school/");
    }
    
}
