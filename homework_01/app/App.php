<?php

namespace main\app;

use main\app\Router;
use main\app\Database;

class App 
{
    public static string $ROOT_DIR;
    public static App $app;
    public Router $router;
    public Database $db;

    public function __construct(string $rootDir, array $config)
    {
        self::$ROOT_DIR = $rootDir;
        self::$app = $this;
        $this->router = new Router();
        $this->db = new Database($config);
    }

    public function run() {
        echo $this->router->resolve();
    }
}