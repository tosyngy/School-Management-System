
<?php

class Search extends Controller{

    function __construct() {
        parent::__construct();
       }

        function index(){ 
       //  echo json_encode($this->model-> getTree());
         $this->view-> render("index/index",TRUE);
        }
        function loadspec() {            
            $this->model->loadspec();
        }
        function searchone() {
            $this->model->searchone();
        }

     

}
