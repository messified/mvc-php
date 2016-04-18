<?php

namespace App\View;

class View {

    public function render($view, array $properties = []){
        if(!empty($properties)) {
            extract($properties);
        }

        if($view) {
            ob_start();
            include('default.php');
            echo ob_get_clean();
        }

        return null;
    }
}
