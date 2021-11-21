<?php

session_start();

$questions = $_SESSION['questions'];

$is_correct = false;

foreach($questions as $q) {
    if(array_key_exists($_POST["q"], $q)) {
        if($q[$_POST["q"]] === $q['correct']) {
            $is_correct = true;
            break;
        }
    }
}

print_r(json_encode(["is_correct" => $is_correct]));
