<?php

class Controller {

    public $params = [];
    public $layout = 'default';

    public function render($filename) {
        extract($this->params);
        ob_start();
        $dir = strtolower(str_replace('Controller', '', get_class($this)));
        require(ROOT . "views/" . $dir . '/' . $filename . '.php');
        $content_for_layout = ob_get_clean();

        if (!$this->layout == false) {
            require(ROOT . "views/layouts/" . $this->layout . '.php');
        }
    }

    public function set($params) {
        $this->params = array_merge($this->params, $params);
    }

}