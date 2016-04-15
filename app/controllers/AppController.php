<?php

require_once 'app/ViewRenderer.php';

class AppController {

	var $view;

	function __construct() {
		$this->view = new ViewRenderer();
	}

}

