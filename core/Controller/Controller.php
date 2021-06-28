<?php

namespace core\Controller;

class Controller{

    protected $viewPath;
    protected $template;

    protected function render($view, $variables = []){
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . str_replace('\\', '/', $this->template) . '.php');
    }

    protected function forbidden(){
        Header('HTTP/1.0 403 Forbidden');
        die('Acces interdit');
    }

    protected function notFound(){
        Header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }
}