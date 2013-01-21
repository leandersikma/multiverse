<?php
abstract class ApiCore {
	public $parameters;
	public $method;
	public $url_parameters = array();
	public $db;
	
	public function __construct() {
		$this->db = new Database();
	}
	
	public function response($data) {
		return json_encode($data);
	}
	
}

?>