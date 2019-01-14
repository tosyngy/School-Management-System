<?php

class Admin extends controller {

    function __construct() {
        parent::__construct();
        $this->loadmodel("admin");
    }

    public function index() {
//            require './v/admin/header.php'; 
//            require './v/admin/navigation.php'; 
        if (isset($_SESSION["admin_id"])) {
//            $this->view->students = $this->model->get_students();
//            $this->view->show_admin("admin/all_students.php");
////             $this->view->show_admin("admin/index.php");
//            $this->view->students = $this->model->get_students();
////        $this->view->summary = $this->model->summary();
//            $this->view->course = $this->model->course();
//            $this->view->show_admin("index/index.php");
            $this->students();
        } else {
//             $this->view->show_admin("admin/login.php");
            $this->view->show_admin_login("login.php");
        }
    }

    public function students() {
    $allStudents = $this->model->students();
        $this->view->allStudents = $allStudents;
        $this->view->show_admin("students/index.php");
    }

    public function parents() {
        $this->view->students = $this->model->get_students();
//        $this->view->summary = $this->model->summary();
        $this->view->course = $this->model->course();
        $this->view->show_admin("parents/index.php");
    }

    public function teachers() {
        $this->view->students = $this->model->get_students();
//        $this->view->summary = $this->model->summary();
        $this->view->course = $this->model->course();
        $this->view->show_admin("teachers/index.php");
    }

    public function subjects() {
        $this->view->students = $this->model->get_students();
//        $this->view->summary = $this->model->summary();
        $this->view->course = $this->model->course();
        $this->view->show_admin("subjects/index.php");
    }

    public function classes() {
        $this->view->students = $this->model->get_students();
//        $this->view->summary = $this->model->summary();
        $this->view->course = $this->model->course();
        $this->view->show_admin("classes/index.php");
    }

    public function student_info() {
        $id = $_POST["id"];
        $this->model->student_info($id);
    }

    public function student_info_update() {
        $id = $_POST["id"];
        $status = $_POST["status"];
//        echo $id;
//        echo $status;
        $this->model->student_info_update($id, $status);
    }

    public function admitted_students() {
        $this->view->students = $this->model->get_students_admitted();
        $this->view->show_admin("admin/admitted_students.php");
    }

    public function pending_students() {
        $this->view->students = $this->model->get_students_pending();
        $this->view->show_admin("admin/pending_students.php");
    }

    public function deffered_students() {
        $this->view->students = $this->model->get_students_deffered();
        $this->view->show_admin("admin/deffered_students.php");
    }

    public function statistics() {
//        $this->view->students = $this->model->statistics();
        $this->view->course = $this->model->getCourses();
        $this->view->summary = $this->model->summary();
//    print_r( $this->view->summary);
        $this->view->show_admin("admin/statistics.php");
    }

    public function login() {
        $this->model->admin_login();
    }

    function logout() {
        $this->model->logout();
    }

}
