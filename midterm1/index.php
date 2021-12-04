<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <style>
        input[type=text] {
            width: 120px;
        }
        .labels span {
            width: 120px;
        }
    </style>

    <title>Admin</title>
</head>
<body>
    <nav>
        <a href="?add">Add</a>
        <a href="?edit">View (edit, delete)</a>
        <a href="?search">Search</a>
    </nav>

    <?php 
        if(isset($_GET['add'])) include "pages/add.php";
        elseif(isset($_GET['search'])) include "pages/search.php";
        else include "pages/edit.php";
    ?>

    <script src="script.js"></script>
</body>
</html>