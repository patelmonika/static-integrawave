<?php

    //ob_start(); //Output Buffering is turned on

    // Assign file paths to PHP constants
    // __FILE__ returns the current path to this file
    // dirname() returns the path to the parent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH. '/public');
    define("SHARED_PATH", PRIVATE_PATH. '/shared');

    // Assign the root URL to a PHP constant
    // * Do not need to include the domain
    // * Use same document root as webserver
    // * Can set a hardcoded value:
    // * Can dynamically find everything in URL up to "/public"

    if(strpos($_SERVER['SCRIPT_NAME'], '/IntegraWave') > 0){
        $public_end = strpos($_SERVER['SCRIPT_NAME'], '/IntegraWave') + 12;
    }
    else{
        $public_end = "";
    }
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);

    require_once 'functions.php';
?>