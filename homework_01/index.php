<?php

// Display errors on webpage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__.'/vendor/autoload.php';

use main\app\App;
use main\controllers\HomeController;

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "",
    "db" => "dictionary"
];


$app = new App(dirname(__FILE__), $config);

$app->router->add('/', [HomeController::class, 'home']);
$app->router->add('/test', function() {
    return App::$app->router->render("test", []);
});

$app->run();
