<?php

class Loader extends CoreController {
	
	public function __construct() {
		parent::__construct();

	}
	
	public function Loader() {
		
	}
	
	public function call($url, $params = null) {
		$url = BASEURL . $url;
		$CURL = curl_init();

		curl_setopt($CURL, CURLOPT_URL, $url);
		curl_setopt($CURL, CURLOPT_HEADER, 0);
		curl_setopt($CURL, CURLOPT_POST, true);
		curl_setopt($CURL, CURLOPT_POSTFIELDS, $params);
		curl_setopt($CURL, CURLOPT_RETURNTRANSFER, 1);
		
		$data = curl_exec($CURL);
		curl_close($CURL);
		$result = json_decode($data);	
		return $result;
	}
	
	public function view($view, $args = null) {
		
		if(is_array($args) && !empty($args)) {
			extract($args);
		}
				
		$filename = APPPATH . 'view/' . $view . '.php';
		$filenameLower = APPPATH . 'view/' . strtolower($view) . '.php';

        if(file_exists($filename)) {
        	include($filename);    
        } else if(file_exists($filenameLower)) {
	        include($filenameLower);
        }
        
        $_output = ob_get_contents();
        $this->output->appendOutput($_output);
	}

}

?>