<?php
$table = "categorys";
$create = "CREATE TABLE IF NOT EXISTS $table(
                  id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  title VARCHAR(200) NOT NULL,
                  author_id INT(11) UNSIGNED NULL,
                  FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE SET NULL ON UPDATE CASCADE,
                  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

$conn->exec($create);
?>