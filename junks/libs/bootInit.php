<?php

class bootInit {

    function __construct() {

        $param = isset($_GET['url']) ? $_GET['url'] : null;
        $param = rtrim($param, '/');
        $param = explode('/', $param);
        $url = $param[0];


        if (empty($url)) {
            require 'controllers/index.php';
            $controller = new Index();
            return false;
        }


        $file = 'controllers/' . $url . '.php';
        if (file_exists($file)) {
            require $file;
            $controller = new $url;

            if (isset($param[2])) {
                $controller->{$param[1]}($param[2]);
            } else if (isset($param[1])) {
                $controller->{$param[1]}();
            }
        } else {
            require 'controllers/error.php';
            $contr = new Error();
        }
    }

}
