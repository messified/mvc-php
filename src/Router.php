<?php

    namespace App;

    use App\Controller\MoviesController;
    use App\Model\Movie;
    use App\View\View;

    class Router
    {
        public function Route()
        {
            $view = new View();
            $model = new Movie();
            $controller = new MoviesController($view, $model);

            if (!isset($_GET['action'])) {
                $_GET['action'] = 'index';
            }

            switch ($_GET['action']) {
                case 'index':
                    $controller->indexAction();
                    break;
                case 'search':
                    $controller->searchAction();
                    break;
                case 'similar':
                    $controller->searchAction('similar');
                    break;
                default:
                    $controller->indexAction();
                    break;
            }
        }
    }
