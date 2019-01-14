<?php

class employee extends controller {

    function __construct() {
        parent::__construct();
        $this->loadmodel("employee");
    }

    public function index() {
        $employee_info = $this->model->all_employee();
//        $this->view->employee_personal = $employee_personal;
//        //employee contact
//        $employee_contact = $this->model->view_employee_contact();
//        $this->view->employee_contact = $employee_contact;
//        //employee work details
//        $employee_work = $this->model->view_employee_work_details();
//        $this->view->employee_work = $employee_work;
//        //employee picture
//        $employee_picture = $this->model->view_employee_picture();
        $this->view->employee_info = $employee_info;
        $this->view->show_admin("employee/index.php");
    }

    public function add() {

        $this->view->show_admin("employee/add.php");
    }
      public function update() {
         
       $this->model->update();
    }
  public function short_info() {
         
       $this->model->short_info();
    }
}
