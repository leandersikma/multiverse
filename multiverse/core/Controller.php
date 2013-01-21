<?php

class MV_Controller {

	public function __construct() {
		$this->output = OutputHandler::getInstance();
		$this->load = new Loader();
		
	}

}

?>