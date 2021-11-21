<?php

namespace main\app;

use main\app\App;

class Router {

    public array $routes = [];

    public function add($path, $callback) {
        $this->routes[$path] = $callback;
    }

    private function getPath() {
        $path = $_SERVER["REQUEST_URI"];
        $position = strpos($path, '?');

        if ($position !== false) {
            $path = substr($path, 0, $position);
        }
        return $path;
    }

    public function resolve() {
        $path = $this->getPath();
        $callback = $this->routes[$path] ?? false;

        if(!$callback) {
            http_response_code(404);
            return "404 Not Found";
        }

        return call_user_func($callback);
    }

    public function render(string $view, array $params=[]) {
        $viewContent = $this->renderView($view, $params);
        ob_start();
        include_once App::$ROOT_DIR."/views/base.php";
        $layoutWithView = ob_get_clean();
        return str_replace('{{content}}', $viewContent, $layoutWithView);
    }

    public function renderView(string $view, array $params) {
        foreach($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once App::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }
}