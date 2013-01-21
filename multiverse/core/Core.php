<?php
class MV_Core extends AbstractCore {

	public function MV_Core() {
		parent::__construct();
		
		$this->Route();
		$this->sendResponse();
	}
	
	public function Route() {
		$this->_controllerName = $this->handling->url_elements[0];
		$this->_actionName = $this->handling->url_elements[1];

		parent::Route();
	}
	
	
	public function sendResponse() {
		echo $this->output->getOutput();
	}
	
	
	
	
}


?>