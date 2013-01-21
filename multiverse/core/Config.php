<?php

class Config {
	
	private static $c_Instance; 

    private function __construct() { /* Constructor is private new Config() doesn't work anymore */ }
    
    public static function getInstance() 
    { 
        if (!self::$c_Instance) 
        { 
            self::$c_Instance = new Config(); 
        } 

        return self::$c_Instance; 
    } 
	
	public function Config() { }

	public function getValue($key) {
		global $config;
		return $config[$key];
	}
}

?>