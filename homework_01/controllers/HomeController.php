<?php

namespace main\controllers;

use main\app\App;
use main\models\Dictionary;

class HomeController {
    public static function home() {

        $pairs = [];
        if ($_SERVER["REQUEST_METHOD"] === 'GET') {
            $dict = new Dictionary();
            $words = $dict->selectAll();

            $pairs = [];
            while($row = $words->fetch(\PDO::FETCH_ASSOC)) {
                $pair = ["id" => $row["id"], "word_ge" => $row["word_ge"], "word_en" => $row["word_en"]];
                array_push($pairs, $pair);
            }
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $word_ge = $_POST["word_ge"];
            $word_en = $_POST["word_en"];
            $pair = new Dictionary();
            $pair->word_ge = $word_ge;
            $pair->word_en = $word_en;
            $pair->save();
            header("Location: /");
            return;
        }

        if ($_SERVER["REQUEST_METHOD"] === 'DELETE') {
            $data = file_get_contents("php://input");
            $id = json_decode($data, true)["id"];
            $word = new Dictionary();
            $word ->delete($id);
        }

        return App::$app->router->render('home', ["pairs" => $pairs ]);
    }
}
