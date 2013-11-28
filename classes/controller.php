<?php
/**
 *	@class 			Controller
 *	@version		0.1.0
 *	@description	Responsible for calling models and views 
 *	@author			Jarne W. Beutnagel (jarne@beutnagel.dk)
 *	@system 		CMS Paul
 *	@license		Free for all
 */

class Controller {
	static $data;
	//public $model;
	public function __construct() {
	/**
	 * @description Initiates the database connection
	 */
		include_once('database.php');
		$db = Database::getInstance();
		$db->initiate("localhost","root","","cms_paul");
		$db->connect();
	}

	public function setModel($model) {
	/**
	 * $model 		The model file that has to be included	
	 */
		include 'models/'.$model.'.php';
		//var_dump($this->model);
	}

	public function insertView($view,$settings = null) {
	/**
	 * $view 		The view file that has to be included	
	 * $settings 	An array of settings for that view (optional)
	 */
		include 'views/'.$view.'.php';
	}
}
?>