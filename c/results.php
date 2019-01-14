<?php

class results extends controller {

    function __construct() {
        parent::__construct();
        $this->loadmodel("results");
    }

    public function index() {
        $this->view->show_admin("results/index.php");
    }

    public function result() {
        $this->model->getInfo($_POST["cls"],$_POST["term"],$_POST["section"]);
    }

    function saveResult() {
             $this->model->getInfo($_POST["cls"],$_POST["term"],$_POST["section"]);
    }

    public function add() {
        $this->view->show_admin("results/add.php");
    }

        public function getstdinfo() {
        $this->model->getstdinfo();
    }
//    public function getallterms() {
//        $this->model->getallterms;
//    }
//
//    public function getallclass() {
//        $this->model->getallclass;
//    }
//
//    public function getallsession() {
//        $this->model->getallsession;
//    }

}
