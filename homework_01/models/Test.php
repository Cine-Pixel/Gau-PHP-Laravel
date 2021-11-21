<?php

namespace main\models;

use DateTime;
use main\app\App;
use main\app\Model;

class Test extends Model {
    public DateTime $start_date;
    public DateTIme $end_date;
    public float $duration;
    public int $score;

    public function tableName(): string
    {
        return 'test';
    }

    public function properties(): array
    {
        return ['start_date', 'end_date', 'duration', 'score'];
    }

    public function get_random_words(): array {
        $words = [];

        $sql = "SELECT * FROM dictionary ORDER BY RAND() LIMIT 5";
        $stmt = App::$app->db->query($sql);
        $stmt->execute();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            array_push($words, ['id' => $row['id'], 'word_en' => $row['word_en'], 'word_ge' => $row['word_ge']]);
        }

        return $words;
    }
}
