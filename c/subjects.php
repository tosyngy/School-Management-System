<?php

class subjects extends controller {

    function __construct() {
        parent::__construct();
        $this->loadmodel("subjects");
    }

    public function index() {
        $this->view->details =  $this->model->getallassignedsubjects();
        $this->view->show_admin("subjects/index.php");
    }

    public function add() {
        $this->view->show_admin("subjects/add.php");
    }

    function init() {
        $this->model->init();
    }

    function addSubject() {
        $this->model->addSubject();
    }

    public function SubjClassMap() {
        $this->model->getallassignedsubjects();
    }

    public function assignSubjectToClass() {
        print_r($_POST);
        $this->model->assignSubjectToClass();
    }
    public function view($param) {
        $this->view->shrt =  $param;
        $this->view->show_admin("subjects/index.php");
    }

}
