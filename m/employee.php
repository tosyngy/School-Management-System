<?php

class Employeemod extends model {

    function __construct() {
        parent::__construct();
    }
    
   
        function view_employee_personal() {
        return $this->db->select("select * from employee_personal_detail");
    }

    function view_employee_contact() {
        return $this->db->select("select * from employee_contact");
    }
    
            function view_employee_work_details() {
        return $this->db->select("select * from employee_work_detail");
    }


    function view_employee_picture() {
        return $this->db->select("select * from picture");
    }
    function all_employee() {
        return $this->db->select("SELECT Distinct  c.emp_id, c.address, c.city, c.state, c.country,  c.mobile_phone, c.email, a.Fullname, a.gender, a.Religion, a.children_count, a.State_of_origin, a.date_of_birth,  b.salary, b.emp_category, b.qualification, b.year_experience, d.pix_name  FROM  `employee_personal_detail` as a,  `employee_work_detail` as b,  `employee_contact` as c,  `picture` as d  WHERE  b.emp_id=a.id AND  c.emp_id=a.id AND  d.user_id=a.id AND  d.usertype='STAFF'");
    }
    function update() {
//        echo 'e';
  $id=$_POST["id"];
  $fullname=$_POST["fullname"];
       $qua=$_POST["qualification"];
  
       $salary=$_POST["salary"];
       $date=$_POST["date"];
       $address=$_POST["address"];
       $state=$_POST["state"];
       $religion=$_POST["religion"];
       $mail=$_POST["email"];
    
       $personal = array(
           "Fullname" => "$fullname",
           "date_of_birth" => "$date",
           "State_of_origin" =>$state,
           "Religion" => "$religion"
       );
       $work = array(
           "salary" => $salary,
           "qualification" => $qua
    );
       $contact= array(
           "address" => "$address",
           "email" => $mail
           
         
       );
       echo $this->db->update("employee_personal_detail",$personal , "id=$id");
       echo $this->db->update("employee_contact", $contact, "id=$id");
       echo $this->db->update("employee_work_detail", $work, "id=$id");
    
        }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }
 
  

   
 

    


 