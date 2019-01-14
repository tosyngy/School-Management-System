<?php

class Picturemod extends model {

    function __construct() {
        parent::__construct();
    }

    public function show($name) {
        echo file_get_contents("http://localhost/school/picture/" . $name);
    }

}
