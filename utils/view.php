<?php

class view {

    function __construct() {
        
    }

    function display($page, $removeHead = false) {
          if ($removeHead) {
            include "./v/" . $page;
        }else{
        require_once "./v/header/header.php";
        include "./v/" . $page;
        require_once "./v/footer.php";
    }
    }

    function show($page) {
        if (isset($_SESSION["id"])) {
            require_once "./v/dashboard/index.php";
            include "./v/" . $page;
            require_once "./v/footer.php";
        } else {
            require_once "./v/header/header.php";
            require_once "./v/index/index.php";
        }
    }

    function show_admin_login($page) {

//        require_once "./v/admin/header.php";
//        require_once "./v/admin/navigation.php";
        include "./v/" . $page;
//        require_once  "./v/footer.php";
    }

    function show_admin($page) {

        require_once "./v/header/index.php";
        require_once "./v/navigation/index.php";
        include "./v/" . $page;
//        require_once  "./v/footer.php";
    }

    function login($page) {
        require_once "./v/header/header1.php";
        include "./v/" . $page;
        require_once "./v/footer.php";
    }

    function dashbord($page) {
        require_once "./v/header.php";
    }

}
