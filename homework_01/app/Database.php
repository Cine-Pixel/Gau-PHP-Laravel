<?php

namespace main\app;

use PDO;

class Database {
    public PDO $conn;

    public function __construct(array $config)
    {
        $servername = $config['servername'];
        $username = $config["username"];
        $password = $config["password"];
        $db = $config["db"];

        $this->conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function prepare($sql): \PDOStatement {
        return $this->conn->prepare($sql);
    }
}
