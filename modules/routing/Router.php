<?php 
class Router {
    public function __construct() {
        $this->GET = [];
        $this->POST = [];
    }
    public function get($route, $callback) {
        $this->GET[$route] = $callback;
    }

    public function post($route, $callback) {
        $this->POST[$route] = $callback;
    }

    public function redirect($url, $method) {
        if (array_key_exists($url, $this->$method)) {
            return $this->$method[$url]();
        }
        $context = [
            'title' => '404 - Documento não encontrado!',
        ];
        require COMPONENTS_PATH.'head.php';
        return PAGES_PATH.'404.php';
    }
}