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
        
    }
}
