<?php
/**
 *	@class 			Model
 *	@version		0.1.0
 *	@description	Parent class for models
 *	@author			Jarne W. Beutnagel (jarne@beutnagel.dk)
 *	@system 		CMS Paul
 *	@license		Free for all
 */


class Model {
	protected $date; 
	protected $db;
	public function __construct() {
		$this->data = Controller::$data;
		$this->db = Database::getInstance();
	}
	public function add($key,$value) {
		$this->data[$key] = $value;
	}
	public function __destruct() {
		Controller::$data = $this->data;
	}
/*	public function setData($data) {
		$this->data = $data;
	}
	public function getData() {
		return $this->data;
	}
*/
}
?>