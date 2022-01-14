<?php

function random_string(int $length) {
    $result = "";
    while($length--) {
        $result .= IntlChar::chr(random_int(ord('ა'), ord('ჰ')));
    }
    echo $result;
}

random_string(8);