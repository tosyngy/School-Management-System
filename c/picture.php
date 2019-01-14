<?php

class picture extends controller {

    function __construct() {
        parent::__construct();
        $this->loadmodel("picture");
    }

    public function index($name) {
//        echo '';
    }

    public function show($name) {
        $this->model->show($name);
    }

    public function changeClassPayments() {
        $this->model->changeClassPayments();
    }

    public function makePayment() {
        $this->model->makePayment();
    }

}
