<?php

require_once 'app/controllers/AppController.php';

// TODO: We need to figure out how to use the ViewRenderer to render these views inside the template
// This class inherits it, so we can use it directly once we get it ready

class MoviesController extends AppController {
	
	var $path='app/views/';
	
	function index() {
		echo "Please render the index view here";
		// The view is in 'app/views/index.php'
		// We need to show it inside 'app/views_template.php'
	}

	function search() {
		echo "Please render the search view here";
		// The view is in 'app/views/search.php'
		// We need to show it inside 'app/views_template.php'
		// Also, we need to pass it the search results variables so it can display them
		// Can we use a model to get those results?
	}

	function similar() {
		echo "Please render the similar view here";
		// The view is in 'app/views/similar.php'
		// We need to show it inside 'app/views_template.php'
		// Also, we need to pass it the movie info, similar movies and user click history
		// variables so it can display them
		// What models can we put in place for that data?
	}

}
