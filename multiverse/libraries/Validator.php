<?php

abstract class Validator {
	protected $nextValidator;
	
	public function setNext($validator) {
		$this->nextValidator = $validator;
	}
	
	public function next() {
		if(isset($this->nextValidator)) {
			$this->nextValidator->validate();
		}
	}
	
	public abstract function validate();
}



?>