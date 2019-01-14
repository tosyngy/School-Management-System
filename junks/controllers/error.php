<?php

class Error extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

//         $this->view->term = $this->model->getallterms();
//         $this->view->class = $this->model->getallclass();
//         $this->view->session= $this->model->getallsession();
        $this->view->render("error/index", TRUE);
//        $this->view->render("index/index", TRUE);
    }

//English Language
//Mathematics
//Economics
//Agriculcutal Science
//Computer Science
//Yoruba Language
//Biology
//Chemistry
//Physics
//Commerce
//Gorvernment
//Fine Art
//Accounting
//Food And Nutrition
//Further Mathematics
//CRK
//Literature In English
//History
//Principle Of Accounting 
}
