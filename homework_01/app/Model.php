<?php 

namespace main\app;

abstract class Model {
    public abstract function tableName() : string;
    public abstract function properties() : array;

    public function selectAll() : \PDOStatement {
        $tableName = $this->tableName();
        $properties = $this->properties();
        
        $sql = "SELECT * FROM $tableName";
        $stmt = App::$app->db->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public function selectOne($id) {
        $tableName = $this->tableName();
        $properties = $this->properties();

        $sql = "SELECT * FROM $tableName WHERE 'id'=$id LIMIT 1";
        $stmt = App::$app->db->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch(\PDO::FETCH_ASSOC);
        $this->word_ge = $row["word_ge"];
        $this->word_en = $row["word_en"];

    }
}
