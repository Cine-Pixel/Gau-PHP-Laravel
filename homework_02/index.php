<?php
    // Display errors on webpage
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'db.php';    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .question-text {
            width: 40%;
        }
    </style>
    <title>Test</title>
</head>
<body>
    <nav>
        <a href="?add">Add question</a>
        <a href="?edit">Edit questions</a>
        <a href="?test">Take test</a>
    </nav>

    <?php 
        if(isset($_GET['test'])) include "test.php";
        elseif(isset($_GET['edit'])) include "edit.php";
        else include "add.php";
    ?>
</body>
</html>