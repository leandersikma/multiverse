<?php

/**
* Define ROOT of the Multiverse framework
*/
define("ROOT", "/");

/**
* Define BASE with DOCUMENT_ROOT
*/
define("BASE", $_SERVER['DOCUMENT_ROOT']);

/**
* Define SYSTEM of the Multiverse core framework folder.
*/
define("SYSTEM", "multiverse/");

/**
* Define APP for application
*/
define("APP", "application/");

/**
* Define API 
*/
define("API", "api/");

/**
* Define BASEPATH
*/
define("BASEPATH", BASE . ROOT);

/**
* Define SYSTEMPATH
*/
define("SYSTEMPATH", BASE . ROOT . SYSTEM);

/**
* Define APPPATH: path to the APPLICATION folder
*/
define("APPPATH", BASE . ROOT . APP);

/**
* Define APIPATH: path to the API folder
*/
define("APIPATH", BASE . ROOT . API);

/**
* Define BASEURL
*/
define("BASEURL", "http://" . $_SERVER['HTTP_HOST'] . ROOT);

/**
* Include Multiverse core framework.
*/
require_once(SYSTEMPATH . "core/Multiverse.php");

?>