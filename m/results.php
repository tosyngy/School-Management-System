<?php

class Resultsmod extends model {

    function __construct() {
        parent::__construct();
    }

    public function getallterms() {
        $sql = "Select id as term_id,name as term from terms";
        return $result = $this->db->select($sql);
    }

    public function getallclass() {
        $sql = "Select id as class_id,code as class from classmap";
        return $result = $this->db->select($sql);
    }

    public function getallsession() {
        $sql = "Select id as session_id,name as session from sessions";
        return $result = $this->db->select($sql);
    }

    public function getstudent($param) {
        return $result = $this->db->select($sql);
    }

    public function geta() {
        $sql = "Select name from sessions";
        return $result = $this->db->select($sql);
    }

    public function getstdinfo() {
        $result = array();
        array_push($result, $this->getallsession());
        array_push($result, $this->getallclass());
        array_push($result, $this->getallterms());
        echo json_encode($result);
    }

    public function getInfo($cls, $trm, $ses) {
        $query = "";
        $cl_gr=0;
        if(strtolower(substr($cls,0,1))==="p"){
            $cl_gr=1;
        }else if(strtolower(substr($cls,0,1))==="j"){
            $cl_gr=2;
        }else if(strtolower(substr($cls,0,1))==="s"){
           $cl_gr=3; 
        }
        if (!isset($_POST["data"])) {
            $my_item = array();
            $sql = "Select distinct name from subjects,subject_class where class=$cl_gr and subject_class.subject=subjects.id";
            $my_sub = $this->db->select($sql);
            $sql = "Select distinct firstname,lastname,b.admission_no,d.* from `student_personal_details` as a,`student_admission_details` as b,students_archive as c,`broad_sheet` as d where c.session={$this->sessionq($ses)}  and c.class={$this->classq($cls)}  and c.term={$this->termq($trm)} and c.st_id=a.id and c.st_id=b.st_id and d.student_id=c.st_id and d.session_id='{$this->sessionq($ses)}' and d.class_id={$this->classq($cls)}  and d.term_id={$this->termq($trm)} order by student_id";
            $my_stud = $this->db->select($sql);
            array_push($my_item, $my_sub);
            array_push($my_item, $my_stud);
            echo json_encode($my_item);
            return;
        }

//        foreach ($_POST["data"] as $key => $value) {
//        print_r($_POST);
        $std = 0;
        $st = 0;
        foreach ($_POST["data"] as $key2 => $data) {
            $i = 0;
            $test = "";
            if (!empty($data["reg no"])) {
                if ($data["reg no"] !== "test") {
                    $std = $data["reg no"];
                    $st = 0;
                } else {
                    $dt = $this->status($cls, $trm, $ses, $std, ++$st);
                    if (empty($dt)) {
                        $query = "insert into broad_sheet (session_id,class_id,term_id,student_id,status) values('{$this->sessionq($ses)}','{$this->classq($cls)}','{$this->termq($trm)}','{$this->studentq($std)}','$st');";
                        $this->db->select($query);
                    }
                    $test = "test";
                }
            } else {
                continue;
            }
            foreach ($data as $key3 => $data2) {
                if ($key3 === "name") {
                    continue;
                }
                if ($key3 === "reg no") {
                    continue;
                }
                if ($i++ == 0) {
                    $query = "update broad_sheet set ";
                }
                $data2=  trim($data2);
                $query.= "`" . $key3 . "`='$data2',";
            }
            if ($i != 0 && $test == "") {
                $query = substr($query, 0, strlen($query) - 1) . ",`set`=1 where student_id='{$this->studentq($std)}' and session_id='{$this->sessionq($ses)} ' and term_id='{$this->termq($trm)}' and class_id='{$this->classq($cls)}' and status=0 ;";
                $this->db->select($query);
                print_r($query);
            } else {
                $query = substr($query, 0, strlen($query) - 1) . ", `set`=1 where student_id='{$this->studentq($std)}' and session_id='{$this->sessionq($ses)}' and term_id='{$this->termq($trm)}' and class_id='{$this->classq($cls)}' and status=$st ;";
                $this->db->select($query);
                print_r($query);
            }
        }
        $this->db->select($query);
    }

//    }

    function createquery() {
        
    }

    function status($cls, $trm, $ses, $std, $st) {
        $sql = "select `status`,`set` from broad_sheet  where student_id='{$this->studentq($std)}' and session_id='{$this->sessionq($ses)} ' and term_id='{$this->termq($trm)}' and class_id='{$this->classq($cls)}'  and status =$st order by id limit 1 ;";
        $my_sub = $this->db->select($sql);
        if (!empty($my_sub)) {
            return $my_sub[0];
        } else {
            return $my_sub;
        }
    }

    function classq($name) {
        $sql = "(select id from classmap where code = '$name')";
        $my_sub = $this->db->select($sql);
        return $my_sub[0]["id"];
    }

    function studentq($name) {
        $sql = '(select st_id from `student_admission_details` where admission_no ="' . $name . '")';
        $my_sub = $this->db->select($sql);
        return $my_sub[0]["st_id"];
    }

    function sessionq($name) {
        $sql = "(select id from sessions where name = '$name')";
        $my_sub = $this->db->select($sql);
        return $my_sub[0]["id"];
    }

    function termq($name) {
        $sql = "(select id from terms where name = '$name')";
        $my_sub = $this->db->select($sql);
        return $my_sub[0]["id"];
    }

}
