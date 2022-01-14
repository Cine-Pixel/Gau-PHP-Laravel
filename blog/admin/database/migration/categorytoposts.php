<?php
$table = "categorytoposts";
$create = "CREATE TABLE IF NOT EXISTS $table(
                  category_id INT(3) UNSIGNED NULL,
                  post_id INT(11) UNSIGNED NULL,
                  FOREIGN KEY (category_id) REFERENCES categorys(id) ON DELETE CASCADE ON UPDATE CASCADE,
                  FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE ON UPDATE CASCADE,
                  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

$conn->exec($create);
?>