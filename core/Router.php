<?php

namespace app\core;
use app\core\Request;

class Router {

    public Request $request;
    protected $routes = [];

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function get($path, $callback) {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve() {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        echo $method;
    }
}