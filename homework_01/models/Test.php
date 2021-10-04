<?php

namespace main\models;

use main\app\Model;

class Test extends Model {

    public function tableName(): string
    {
        return 'test';
    }

    public function properties(): array
    {
        return [];
    }
}