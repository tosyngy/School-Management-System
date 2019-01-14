<?php

class ConHandler {

    public $con;

    public function __construct() {
        require './libs/baselist.php';
        $base = new baseList();
        $b44 = new Bootstrap();
//        echo 'hey';
//        $this->con = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
//        print_r($this->con->select("select  * from users"));
//        echo $_POST['uname'];
//        echo $_POST['password'];
    }

}

$hee = new ConHandler();
