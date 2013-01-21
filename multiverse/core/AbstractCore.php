<?php

abstract class AbstractCore {
	public $_controllerName;
	public $_actionName;
	public $controller_name;
	public $action_name;
	
	public function __construct() {
		$this->handling = new Handling();
		$this->load = new Loader();
		$this->output = OutputHandler::getInstance();
		$this->config = Config::getInstance();
	}
	
	
	public function Route() {
		if (!empty($this->handling->url_elements)) {
		    $this->controller_name = ucfirst($this->_controllerName);

			if(empty($this->controller_name)) {
				$this->controller_name = $this->config->getValue("default_controller");
			}
 
		    if (class_exists($this->controller_name, TRUE)) {
		        $this->controller = new $this->controller_name;
		        
		        if(!empty($this->_actionName)) {
		        	$this->action_name = $this->_actionName;
		        } else {
			        $this->action_name = 'index';
		        }
		        $this->output->appendOutput(call_user_func_array(array($this->controller, $this->action_name), array($this->handling->parameters)));
		    }
		    else {
		        header('HTTP/1.1 404 Not Found');
		        $this->output->appendOutput('Unknown request: ' . $this->controller_name);
		    }
		}
		else {
		    $this->output->appendOutput('Unknown request');
		}

	}
	
	
}

?>