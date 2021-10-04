<?php

namespace main\controllers;

use main\app\App;
use main\models\Dictionary;

class HomeController {
    public static function getWords() {

        if ($_SERVER["REQUEST_METHOD"] === 'GET') {
            // TODO: fetch words from database
            $dict = new Dictionary();
            $words = $dict->selectAll();

            $pairs = [];
            while($row = $words->fetch(\PDO::FETCH_ASSOC)) {
                $pair = ["word_ge" => $row["word_ge"], "word_en" => $row["word_en"]];
                array_push($pairs, $pair);
            }
        }

        return App::$app->router->render('home', ["pairs" => $pairs ]);
    }
}