<?php


class Login extends controller{

    function __construct() {
        parent::__construct();
        $this->loadmodel("login");
    }
    
    public function index() {
           // require './v/login/index.php'; 
           $this->view->display("login/index.php");
    }
    
    function login() {
        $this->model->login();
    }
    function logout() {
        $this->model->logout();
    }
}
