<?php
class controller {
//    private $view;
//    private $model;
            function __construct($nm=NULL) {
        $this->view= new view();
       $this->loadmodel($nm);
    }
   public function loadmodel($name) {
        $nm="m/".$name.".php";
       if(file_exists($nm)){
           include $nm;
           $name=$name."mod";
           $this->model= new $name();
       }
    }

}

