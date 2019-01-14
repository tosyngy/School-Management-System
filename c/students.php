<?php

class students extends controller {

    function __construct() {
        parent::__construct();
        $this->loadmodel("students");
    }

    public function index() {
       $this->view->session = $this->model->getallsession();
   $this->view->class = $this->model->getallclass();
        $allStudents = $this->model->students();
        $this->view->allStudents = $allStudents; 
        $this->view->show_admin("students/index.php");
   
    }

    public function studentsInClass($class) {
        $allStudents = $this->model->filterByClass($class);
        $this->view->allStudents = $allStudents;
        $this->view->show_admin("students/index.php");
    }

    public function add() {
//   function index() {
        $this->view->term = $this->model->getallterms();
        $this->view->class = $this->model->getallclass();
        $this->view->session = $this->model->getallsession();
        $this->view->admin_number = $this->model->getadmissionnumber();
//        $this->view->render("index/index", TRUE);
//    }
        $this->view->show_admin("students/add.php");
    }

    function submit() {
        $this->model->submit();
    }

    function worker() {
        $this->model->worker();
    }

    function admin_no() {
        $this->model->admin_no();
    }
 function promote() {
      return $this->model->promote();
    }
     function update() {
      return $this->model->update();
    }
 function updateImage() {
      return $this->model->updateImage();
    }
//}
}
