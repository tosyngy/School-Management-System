<?php

define("URL", "http://localhost/school/");
//echo $_GET["url"];
include "./utils/contoller.php";
include "./utils/view.php";
include "./utils/model.php";
include "./utils/Database.php";

function setHead() {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Content-Type');
}

setHead();

//require './public/head.css'; 
$url = isset($_GET['url']) ? $_GET['url'] : null;
//print_r($url);
$url = rtrim($url, "/");
$url = explode("/", $url);
// print_r($url);
session_start();
//session_destroy();
if (empty($url[0])) {
    require './c/admin.php';
    $controller = new Admin();
    $controller->index();
    return FALSE;
}
$file = "c/" . $url[0] . ".php";
if (file_exists($file)) {
    include $file;
    $controller = new $url[0];
    //  $controller->loadmodel($url[0]);
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
            $controller->index();
        }
    } else {
        $controller->index();
    }
} else {
    echo 'page NOt Found';
}
   





