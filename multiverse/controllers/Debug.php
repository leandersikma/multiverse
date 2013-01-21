<?php

class Debug extends CoreController {
	
	public function __construct() {
		parent::__construct();
		include(SYSTEMPATH ."view/debugger.php");
	}
	
	public function index() {
		$this->read();
	}
	
	public function read() {

	}
		
}


?>