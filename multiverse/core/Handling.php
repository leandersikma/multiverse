<?php

class Handling {
	public $url_elements;
	public $parameters;
		
	public function Handling() {
		$this->getRequest();
		$this->getParam();
	}
	
	public function getRequest() {
		if (isset($_SERVER['REQUEST_URI'])) {
			$this->url_elements = explode('/', trim(str_replace(ROOT, "", $_SERVER['REQUEST_URI']), '/'));
		} else {
			return false;
		}	
	}
	
	public function getParam() {
		switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
		    case 'GET':
		        $this->parameters = $_GET;
		    break;
		    case 'POST':
		        $this->parameters = $_POST;
		    break;
		/*
		    case 'PUT':
		        parse_str(file_get_contents('php://input'), $api->parameters);
		    break;
		*/
		}
		return $this->parameters;
	}
	
	public function getParams($params = null) {
		if(is_array($params) && !empty ($params)) {
			foreach($params as $param) {
				$result[$param] = $this->parameters[$param];
			}
			
			return $result;
		}
		return false;
	}
}

?>