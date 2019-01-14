<?php

class baseList {

    function __construct() {

        require 'Session.php';
        require 'Controller.php';

        require 'View.php';
        require 'Model.php';
        require 'Database.php';
        require 'Hash.php';

// Always provide a TRAILING SLASH (/) AFTER A PATH
        define('URL', 'http://localhost/talkie/');
        define('FILES', 'http://localhost/talkie/files/');
        define('VIEW', 'http://localhost/talkie/views/');
        define('LIBS', 'libs/');
        define('PLACEHOLDER', 'placeholder/');
        define('DB_TYPE', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'q');
        define('DB_USER', 'root');
        define('DB_PASS', '/*gmjgtpgdgtm*/');
        define('HASH_GENERAL_KEY', 'MixitUp200');
// This is for database passwords only
        define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');
        require 'Bootstrap.php';
    }

}
