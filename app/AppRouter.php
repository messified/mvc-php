<?php

require_once 'app/controllers/MoviesController.php';

class AppRouter {

	function route() {

		$mc = new MoviesController();

		$action = isset($_GET['action']) ? $_GET['action'] : 'index';

		switch ($action) {
			case 'index':
				$mc->index();
				break;
			case 'search':
				$mc->search();
				break;
			case 'similar':
				$mc->similar();
				break;
		}

	}
}

