<?php

session_start();

// Display errors on webpage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__.'/../vendor/autoload.php';

use main\app\App;
use main\controllers\HomeController;
use main\controllers\TestController;

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "",
    "db" => "dictionary"
];


$app = new App(dirname(__DIR__), $config);

$app->router->add('/', [HomeController::class, 'home']);
$app->router->add('/test', [TestController::class, 'index']);

$app->run();
