<?php

class payment extends controller {

    function __construct() {
        parent::__construct();
        $this->loadmodel("payment");
    }

    public function index() {
        $this->view->payments = $this->model->getAllPayments();
        $this->view->show_admin("payment/index.php");
    }

    public function add() {
  $this->view->term = $this->model->getallterms();
        $this->view->class = $this->model->getallclass();
        $this->view->session = $this->model->getallsession();
        $this->view->show_admin("payment/add.php");
    }
    public function history() {
$this->view->history = $this->model->payment_history();
 $this->view->session = $this->model->getallsession();
   $this->view->class = $this->model->getallclass();
        $this->view->show_admin("payment/history.php");
    }
    
    public function changeClassPayments() {
        $this->model->changeClassPayments();
    }
    public function makePayment() {
        $this->model->makePayment();
    }
    public function search() {
        $this->model->search();
    }
    public function payment_historyjs() {
         
       $this->model->getAllPaymentsjs();
    }
    public function short_info() {
         
       $this->model->short_info();
    }
//    public function payment_history() {
//        $this->model->payment_history();
//    }
    
}
