<?php

class ValidateURL extends Validator {
	
	public function validate() {
		$val = Validate::getInstance()->getValidate();
		
		$val = "1223334dsds";
		Validate::getInstance()->setValidate($val);
		echo "Change URL: " . Validate::getInstance()->getValidate();
		$this->next();
	}
	
}



?>