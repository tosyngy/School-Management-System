<?php

class Bootstrap {

    function __construct() {
//        global $toComfirmMail;

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
//        $url = urlencode($url);

        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
//        print_r($url);
//        // $url = strtolower($url);
//        $forbid = array('confirmuser');
        $passby = array('service_profile');
        $get_profile_allow = array('get_skills', 'edit', 'update_skills', 'SaveImage', 'skills');
//        $barlog = array('index', 'welcome', 'login');
//        $fansquest = array('stadium', 'following', 'followers', 'favorite');
        //print_r($url);
        $url[0] = strtolower($url[0]);
//        echo $url[0];
//       print_r($cat_list);

        if (empty($url[0])) {
            if (isset($_SESSION["username"])) {
                $file = 'controllers/dashboard.php';
                require $file;
                $controller = new dashboard();
                $controller->index();
                return FALSE;
            } else {
                $file = 'controllers/admin.php';
                require $file;
                $controller = new Admin();
                $controller->index();
                return FALSE;
            }
        }
        $file = 'controllers/' . $url[0] . '.php';
//        echo $file;
        if (file_exists($file)) {
            require $file;
            $content = new $url[0]();
            $content->loadModel($url[0]);
            $this->MethodInit($content, $url);
        } else {
            $this->error();
        }
    }

    function MethodInit($controller, $url) {

//        $this->getCats();
        // calling methods
        if (isset($url[1])) {
            if (method_exists($controller, $url[1])) {
                if (isset($url[4])) {
                    $controller->{$url[1]}($url[2], $url[3], $url[4]);
                } else if (isset($url[3])) {
                    $controller->{$url[1]}($url[2], $url[3]);
                } else if (isset($url[2])) {
                    $controller->{$url[1]}(urlencode($url[2]));
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $this->error();
            }
        } else {

            $controller->index();
        }
    }

    function getCats() {
        require 'controllers/cats.php';
        $cc = new Cats();
        $cc->loadModel('cats');
//        $cat_list =
        $cc->g();
//        print_r($cat_list);
        return false;
    }

    function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false;
    }

}
