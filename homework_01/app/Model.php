<?php 

namespace main\app;

abstract class Model {
    public abstract function tableName() : string;
    public abstract function properties() : array;

    public function save() {
        $tableName = $this->tableName();
        $properties = $this->properties();
        $values = [];
        foreach($properties as $prop) {
            array_push($values, $this->$prop);
        }
        $sql = "INSERT INTO $tableName (" . implode(', ', $properties) . ") VALUES ('" . implode("', '", $values) . "');";
        $stmt = App::$app->db->prepare($sql);
        $stmt->execute();
    }

    public function selectAll() : \PDOStatement {
        $tableName = $this->tableName();
        
        $sql = "SELECT * FROM $tableName";
        $stmt = App::$app->db->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public function selectOne($id) {
        $tableName = $this->tableName();

        $sql = "SELECT * FROM $tableName WHERE id=$id LIMIT 1";
        $stmt = App::$app->db->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch(\PDO::FETCH_ASSOC);
        $this->word_ge = $row["word_ge"];
        $this->word_en = $row["word_en"];
    }

    public function delete($id) {
        $tableName = $this->tableName();

        $sql = "DELETE FROM $tableName WHERE id=$id";
        $stmt = App::$app->db->prepare($sql);
        $stmt->execute();
    }
}
