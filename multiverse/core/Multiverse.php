<?php

include_once(APPPATH . "config/config.php");

function loadDirectory() {
    
    $isApi = strpos($_SERVER["REQUEST_URI"], "/" . API);
    
    $coreDirectory = array(
    	SYSTEMPATH . '/core/',
        SYSTEMPATH . '/controllers/',
        SYSTEMPATH . '/helpers/',
        SYSTEMPATH . '/libraries/',
        SYSTEMPATH . '/view/'
    );
    
    if($isApi === false) {
	    $appDirectory = array(
	        APPPATH . '/core/',
	        APPPATH . '/controllers/',
	        APPPATH . '/helpers/',
	        APPPATH . '/libraries/',
	        APPPATH . '/model/'
	    );
	    $directories = array_merge($coreDirectory, $appDirectory);
	} else {    
	    $apiDirectory = array(
	    	APIPATH . '/core/',
	        APIPATH . '/controllers/',
	        APIPATH . '/helpers/',
	        APIPATH . '/libraries/',
	        APIPATH . '/model/'
	    );
	    
	    $directories = array_merge($coreDirectory, $apiDirectory);
	}
    
    return $directories;
}

function autoloadClass($class_name) {

	$directories = loadDirectory();

	foreach ($directories as $directory) {
        $filename = $directory . $class_name . '.php';
        if(file_exists($filename)) {
        	require_once($filename);   
        	break; 
        } else if(file_exists($directory . strtolower($class_name) . '.php')) {
	        require_once($directory . strtolower($class_name) . '.php');
	        break;
        } else if(file_exists($directory . str_replace("MV_", "", $class_name) . ".php")) {
	        require_once($directory . str_replace("MV_", "", $class_name) . ".php");
	        break;
        }
    }
}

spl_autoload_register('autoloadClass');
if(strpos($_SERVER["REQUEST_URI"], "/" . API)) {
	$api = new MV_API();
} else {
	$core = new MV_Core();
}



?>