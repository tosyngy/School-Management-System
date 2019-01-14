<?php

class View {

    function __construct() {
        //echo 'this is the view';
    }

    public function render($name, $noInclude = false) {
        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            // displays the header for the page
            require 'controllers/header.php';
            $header = new Header();
            $header->loadModel('header');
            $header->index();

            // displays  the navigation for the pages
            if( Session::get('loggedIn')){
            require 'views/index/index.php';
            }
//here goes the page content
            
            require 'views/' . $name . '.php';

//            // displays the sidebar for the page          
//            if (Session::get('loggedIn') == true) {
//                //load the side bar;
//                require 'controllers/sidebar.php';
//                $sidebar = new Sidebar();
//                $sidebar->index();
//            }
//
//            //displays the page footer
//            require 'controllers/footer.php';
//            $footer = new Footer();
//            $footer->index();
        }
    }

    public function display($name) {

        require 'views/' . $name . '.php';
    }

}
