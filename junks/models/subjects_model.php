<?php

class Subjects_model extends Model {

    public function __construct() {
        parent::__construct();
    }

    function init() {
        $default = array(
//            "English",
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
        $this->db->insert("subjects", array("name" => $_POST["subject_name"]));
        $this->db->e("ALTER TABLE `broad_sheet` ADD `" . $_POST["subject_name"] . "` TEXT NOT NULL ;");
    }

    public function assignSubjectToClass() {
        $this->db->insert("subject_class", array("subject" => $_POST["subject_name"], "class" => $_POST["class_code"]));
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

}
