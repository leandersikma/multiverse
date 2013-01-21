<?php

class ValidateEmail extends Validator {
	
	public function validate() {
		echo "Change Email: " . Validate::getInstance()->getValidate();
		$this->next();
	}
}



?>