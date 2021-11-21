<?php

namespace main\controllers;

use main\app\App;
use main\models\Test;

class TestController {
    public static function index() {
        if ($_SERVER["REQUEST_METHOD"] === 'GET') {
            $test = new Test();
            $test->start_date = new \DateTime();
            $tribles = $test->get_random_words();

            $words = [];
            foreach($tribles as $trb) {
                $words[$trb['word_en']] =  [
                    $trb['word_ge'], 
                    "whaat", 
                    "sdfsdf", 
                    "ewwer"
                ];
            }

            $_SESSION['test'] = serialize($test);
        }
        return App::$app->router->render('test', params: ["words" => $words]);
    }
}
