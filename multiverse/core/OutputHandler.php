<?php

class OutputHandler {
	
	private static $o_Instance; 

    private function __construct() { /* Constructor is private new OutputHandler() doesn't work anymore */ }
    
    public static function getInstance() 
    { 
        if (!self::$o_Instance) 
        { 
            self::$o_Instance = new OutputHandler(); 
        } 

        return self::$o_Instance; 
    } 
	
	public function getOutput() {
		return $this->output;
	}
	
	public function redirect($url) {
		header('Location: '.ROOT . $url);
		exit();
	}
	
	public function appendOutput($_output = null) {
		$this->output .= $_output;
	}
	
}

?>