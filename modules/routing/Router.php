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
        return './client/pages/404.php';
    }
}