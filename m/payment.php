<?php

class Paymentmod extends model {

    function __construct() {
        parent::__construct();
    }

    public function getAllPayments() {
        return $this->db->select('SELECT a.id, b.code as class, a.`1st`, a.`2nd`, a.`3rd` FROM `school_fees` as a, `classmap` as b WHERE a.class=b.id;');
    }

    public function changeClassPayments() {
//      echo  $this->db->update("school_fees", array("1st" =>23000, "2nd" => 32500, "3rd" =>50000),"`class`  =  '1'");

        $this->db->update("school_fees", array("1st" => $_POST["first"], "2nd" => $_POST["second"], "3rd" => $_POST["last"]), "`class`  =  '{$_POST["id"]}'");
    }

    public function makePayment() {
//        SELECT `id`, `session`, `term`, `student`, `amount`, `date`, `time`
        $std = $_POST['student'];
        $s = $_POST['sessions'];
//  echo $s."jhjhjh";

        $result = $this->db->select("Select `id` from student_admission_details WHERE admission_no = :user", array(":user" => $std));
//        $result = $this->db->prepare('Select `uid` from Doc_familynfriendz WHERE uid ='.$this->myid().' and user_id='.$userid.' ');
        if (count($result) > 0) {
//            echo 'count' . count($result);
            $std_id = $result[0]['id'];
//            echo 'id'.$std_id;
            $payment_details = array(
                'session' => $_POST['sessions'],
                'term' => $_POST['term'],
                'amount' => $_POST['amount'],
                'student' => $result[0]['id'],
                'date' => date("Y-m-d"),
                'time' => "12:34",
//            'time' => $_POST['time'],
                'class' => $_POST['clas'],
                'admmission_Number' => $_POST['student'],
                'status' => "0"
            );
            $this->db->insert("payments", $payment_details);
            echo "PAYMENT RECORDED";
        } else {
            echo 'student not exist';
        }
    }

    public function payment_history() {

        return $this->db->select('SELECT a.*, b.name as session,c.firstname,c.middlename,c.lastname,d.name as term,e.admission_no as addmission_number
FROM 
`payments` as a,
`sessions` as b,
`student_personal_details` as c,
`terms` as d,
`student_admission_details` as e
WHERE a.session=b.id AND a.student=c.id AND a.term=d.id AND a.student=e.st_id');
    }

    public function search() {
        $query = "SELECT a.*, b.name as session,c.firstname,c.middlename,c.lastname,d.name as term,e.admission_no as addmission_number
        FROM 
`payments` as a,
`sessions` as b,
`student_personal_details` as c,
`terms` as d,
`student_admission_details` as e
WHERE a.session=b.id AND a.student=c.id AND a.term=d.id AND a.student=e.st_id";
        if (!isset($_POST["all"])) {
            if (isset($_POST["term"])) {
                $var=$_POST["term"];
                  $query.=" and a.term='$var'";
            }
            if (isset($_POST["myclass"])) {
                 $var=$_POST["myclass"];
                  $query.=" and a.class='$var'";
            }
            if (isset($_POST["session"])) {
                 $var=$_POST["session"];
                  $query.=" and a.session='$var'";
            }
            if (isset($_POST["token"])) {
                  $var=$_POST["token"];
                  $query.=" and a.admission_Number='$var'";
            }
        }
     $res=$this->db->select($query);
//     print_r($query);
     echo json_encode($res);
    }

    public function getallsession() {
        $sql = "Select * from sessions";
        return $result = $this->db->select($sql);
    }

    public function getallclass() {
        $sql = "Select * from classmap";
        return $result = $this->db->select($sql);
    }

    public function short_info() {
//        echo 'ww';
        $token = $_POST['token'];
        $sql = "SELECT Distinct 
a.admission_no,a.st_id,b.id,b.firstname,b.middlename,b.lastname,c.pix_name,c.usertype
FROM 
`student_admission_details` as a,
`student_personal_details` as b,
`picture` as c

WHERE  
a.st_id=b.id AND
a.st_id=c.user_id AND 
c.usertype='STD' AND a.admission_no='" . $token . "'";

        $result = $this->db->select($sql);
        if (count($result) > 0) {

            $teee = $result[0];

            $name = $teee["pix_name"];
            $pix = file_get_contents("picture/" . $name);
            $teee["pix_name"] = $pix;

            echo json_encode($teee);
        } else {
            echo 'no';
        }
    }

    public function getallterms() {
        $sql = "Select * from terms";
        return $result = $this->db->select($sql);
    }

    public function getAllPaymentsjs() {

        $res = $this->db->select('SELECT a.*, b.name as session,c.firstname,c.middlename,c.lastname,d.name as term,e.admission_no as addmission_number

FROM 
`payments` as a,
`sessions` as b,
`student_personal_details` as c,
`terms` as d,
`student_admission_details` as e
WHERE a.session=b.id AND a.student=c.id AND a.term=d.id AND a.student=e.st_id');
        echo json_encode($res);
    }

}
