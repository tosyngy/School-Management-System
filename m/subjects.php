<?php

class Subjectsmod extends model {

    function __construct() {
        parent::__construct();
    }

    function init() {
        $default = array(
            "English Language",
            "Mathematics",
            "Economics",
            "Agriculcutal Science",
            "Computer Science",
            "Yoruba Language",
            "Biology",
            "Chemistry",
            "Physics",
            "Commerce",
            "Gorvernment",
            "Fine Art",
            "Accounting",
            "Food And Nutrition",
            "Further Mathematics",
            "CRK",
            "Literature In English",
            "History",
            "Principle Of Accounting",
        );
        foreach ($default as $k) {
            $this->db->insert("subjects", array("name" => $k));
            $this->db->e("ALTER TABLE `broad_sheet` ADD `" . $k . "` TEXT NOT NULL ;");
        }
    }

    public function addSubject() {
        $this->db->insert("subjects", array("name" => $_POST["name"]));
        $this->db->e("ALTER TABLE `broad_sheet` ADD `" . $_POST["name"] . "` TEXT NOT NULL ;");
    }

    public function assignSubjectToClass() {
        $this->db->insert("subject_class", array("subject" => $_POST["subject"], "class" => $_POST["class"]));
    }

    public function getallterms() {
        $sql = "Select * from terms";
        return $result = $this->db->select($sql);
    }

    public function getallclass() {
        return array(
            1 => "Primary School",
            2 => "Junior Secondary School",
            3 => "Senior Secondary School"
        );
    }

    public function getallassignedsubjects() {
        $resp = array();
        $classList = $this->getallclass();
//        print_r($classList);
        foreach ($classList as $code => $class) {
//            print_r($code);
            $resp[$class] = $this->getsubj_class($code);
        }
        return $resp;
//        print_r($resp);
    }

    public function getsubj_class($class) {
        $filter = array();
        $sql = "SELECT a.subject,b.name FROM `subject_class` as a,`subjects` as b WHERE a.subject=b.id AND class=:class";
        $offering = $result = $this->db->select($sql, array(":class" => $class));
        foreach ($offering as $o) {
            array_push($filter, $o['subject']);
        }
//        print_r($filter);
        $sql2 = "SELECT * FROM  `subjects`";
        $a = $result = $this->db->select($sql2);
        if ($class==1) {
//            print_r($a);
        }
        
        $select = '<select class="input-block-level state" name="subj'.$class.'"><option value="" selected="true" disabled="">Select Subject</option>';
//                       
//                    
        foreach ($a as $n) {
            if (!in_array($n['id'], $filter)) {
                $select.="<option class='option_selector' map='{$class}' value='{$n['id']}' >{$n['name']} </option>";
            }
        }
        $select.="</select>";
        return array("offering"=>$offering,"option"=>$select);
    }

    public function getallsession() {
        $sql = "Select * from sessions";
        return $result = $this->db->select($sql);
    }

}
