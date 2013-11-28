<?php
/**
 *	@class 			View
 *	@version		0.1.0
 *	@description	Parent class for views
 *	@author			Jarne W. Beutnagel (jarne@beutnagel.dk)
 *	@system 		CMS Paul
 *	@license		Free for all
 */

class View {
	protected $date;
	public function __construct() {
		$this->data = Controller::$data;
	}
}
?>