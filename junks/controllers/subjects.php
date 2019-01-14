<?php
class Subjects extends Controller {

    function __construct() {
        parent::__construct();
    }

    function init() {
        $this->model->init();
    }

    function addSubject() {
        $this->model->addSubject();
    }

    public function assignSubjectToClass() {
        $this->model->assignSubjectToClass();
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
