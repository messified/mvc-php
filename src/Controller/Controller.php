<?php

namespace App\Controller;

use App\Model\Movie;
use App\View\View;

class Controller
{
    /**
     * @var View $view
     */
    protected $view;

    /**
     * @var Movie $model
     */
    protected $model;

    public function __construct(View $view, Movie $model)
    {
        $this->view = $view;
        $this->model = $model;
    }
}
