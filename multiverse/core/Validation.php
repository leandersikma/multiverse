<?php

class Validation {
	
	public function Validation() {
		$validateText = new ValidateText();
		$validateEmail = new ValidateEmail();
		$validateURL = new ValidateURL();
		$validateText->setNext($validateEmail);
		$validateEmail->setNext($validateURL);
		
		$validate = Validate::getInstance();
		$validate->setValidate("string");
		
		$validateText->validate();
	}
	
}


?>