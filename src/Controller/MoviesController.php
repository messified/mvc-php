<?php

    namespace App\Controller;

    class MoviesController extends Controller
    {
        public function indexAction()
        {
            return $this->view->render('default', [
                'title' => 'Home',
                'content' => '_home.php',
            ]);
        }

        public function searchAction()
        {
            $movies = $this->model
                ->getAllMovies($_GET['searchterm']);

            return $this->view->render('default', [
                'title' => 'Search Results',
                'content' => '_list.php',
                'movies' => $movies->results,
            ]);
        }

        public function searchSimilarAction()
        {

        }
    }
