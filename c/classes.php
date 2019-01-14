<?php

class classes extends controller {

    function __construct() {
        parent::__construct();
        $this->loadmodel("classes");
    }

    public function index() {
   $this->view->classes=  $this->model->getAllClasses();
         $this->view->show_admin("classes/index.php");
}


    public function add() {
    
         $this->view->show_admin("classes/add.php");
        
        
        
        

}
}
