<?php

// set up some CONSTANTS for our app
define('API_KEY', '');
define('API_ROOT', '');
define('POSTER_IMAGE_ROOT', 'http://image.tmdb.org/t/p/w154');

define('DEBUGGING', true); // set to true to show errors

if (DEBUGGING) {
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
}

require_once 'app/AppRouter.php';

$router = new AppRouter();
$router->route();
