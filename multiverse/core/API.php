<?php
class MV_API extends AbstractCore {

	public function MV_API() {
		parent::__construct();
		$this->Route();
		$this->sendResponse();
		
	}
	
	public function Route() {
		$this->_controllerName = $this->handling->url_elements[1];
		$this->_actionName = $this->handling->url_elements[2];
		
		parent::Route();
	}
	
	public function sendResponse() {
		header('Content-type: text/json');
		echo $this->output->getOutput();
	}
	
	
	
	
}


?>