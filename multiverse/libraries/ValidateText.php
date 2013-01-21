<?php

class ValidateText extends Validator {
	
	public function validate() {
		$val = Validate::getInstance()->getValidate();
		
		$val = "dsdsddsdsds";
		Validate::getInstance()->setValidate($val);
		echo "Change Text: " . Validate::getInstance()->getValidate();
		$this->next();
	}
}



?>