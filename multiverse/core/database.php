<?php

class Database {
	public $db;

	public function __construct() {
		$this->config = Config::getInstance();
		$this->db = new PDO('mysql:host='. $this->config->getValue('database_host') .';dbname='. $this->config->getValue('database_table'), $this->config->getValue('database_username'), $this->config->getValue('database_password'));
	}
	
	public function selectFields($table, $_where = null, $_orderBy = null) {
		if(!empty($_where)) {
			$where = "WHERE " . $_where[0] . " = '" . $_where[1] ."'";
		} else {
			$where = "";
		}
		
		if(!empty($_orderBy)) {
			$orderBy = " ORDER BY " . $_orderBy;
		} else {
			$orderBy = "";
		}
		
		$sql = "SELECT * FROM ". $table . " " . $where . $orderBy;

		$results = $this->db->query($sql);
		return $results->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function update($table, $newData, $where) {
		$sql = "UPDATE ". $table ." SET ";
		foreach($newData as $key => $value) {
			$sql .= $key . " = '" . $value . "'";
		} 
		$sql .= " WHERE " . $where[0] . " = '" . $where[1] . "'";			
		$execute = $db->exec($sql);
		return $execute;
	}
	
	public function insert($table, $insert) {
		$keys = '';
		$values = '';
		foreach($insert as $key => $value) {
			$keys .= $key . ",";
			$values .= "'" . $value . "',";
		}
		$keys = substr_replace($keys,"",-1);
		$values = substr_replace($values,"",-1);
		
		$sql = "INSERT INTO " . $table . " (" . $keys . ")
	    VALUES (" . $values . ")";

    	$results = $this->db->exec($sql);
    	return $results;
	}
	
	public function delete() {
		
	}
	
}


?>