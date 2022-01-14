<?php
$table = "comments";
$create = "CREATE TABLE IF NOT EXISTS $table(
                  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  comment TEXT NOT NULL,
                  author_id INT(11) UNSIGNED NULL,
                  post_id INT(11) UNSIGNED NULL,
                  FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
                  FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE ON UPDATE CASCADE,
                  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

$conn->exec($create);
?>