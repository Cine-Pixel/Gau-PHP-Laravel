<?php

namespace main\models;

use main\app\Model;

class Dictionary extends Model {
    public string $word_ge;
    public string $word_en;

    public function tableName() : string {
        return "dictionary";
    }

    public function properties() : array {
        return ['word_ge', 'word_en'];
    }
}