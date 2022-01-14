<?php
$table = "posts";
$create = "CREATE TABLE IF NOT EXISTS $table(
                  id INT(11) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
                  title VARCHAR(200) NOT NULL,
                  text TEXT NOT NULL,
                  add_date DATE NULL,
                  author_id INT(11) UNSIGNED NULL,
                  view INT(9) NULL,
                  FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE SET NULL ON UPDATE CASCADE,
                  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

$conn->exec($create);
?>