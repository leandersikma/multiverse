<?php

class Validate {
	private $validate;
	private static $v_Instance; 
	
	private function __construct() { }
	
	public function getInstance() {
		if (!self::$v_Instance) 
        { 
            self::$v_Instance = new Validate(); 
        } 

        return self::$v_Instance; 
	}
	
	public function setValidate($_validate) {
		$this->validate = $_validate;
	}
	
	public function getValidate() {
		return $this->validate;
	}
		
}


?>