<?php
include_once  "check_route.php";

const servername = "localhost";
const dbuser = "root";
const dbpassword = "";
const dbname = "blog2021";

try {
    $conn = new PDO("mysql:host=".servername.";dbname=".dbname, dbuser, dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}