<?php

class Classesmod extends model {

    function __construct() {
        parent::__construct();
    }

    public function getAllClasses() {
        return $this->db->select("select  `id`,`code` from classmap");
    }

}
