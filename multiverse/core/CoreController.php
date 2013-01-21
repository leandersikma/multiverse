<?php

class CoreController {
	public $output;
		
	public function __construct() {
		$this->output = OutputHandler::getInstance();

	}

}

?>