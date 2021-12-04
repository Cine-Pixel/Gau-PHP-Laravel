<?php
require_once "db.php";

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $query = "SELECT * FROM info";
    $stmt = $conn->query($query);

    $infos = [];

    while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $inf = [
            "id" => $row['id'], 
            "first_name" => $row['first_name'], 
            "last_name" => $row['last_name'],
            "birth_date" => $row['birth_date'],
            "position" => $row['position'],
            "personal_number" => $row['personal_number'],
            "reg_date" => $row['reg_date'],
            "issue_number" => $row['issue_number'],
        ];
        array_push($infos, $inf);
    }
    echo json_encode($infos);
}

if(isset($_POST['action'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birth_date= $_POST['birth_date'];
    $personal_number = $_POST['personal_number'];
    $position = $_POST['position'];

    $query = "INSERT INTO info (first_name, last_name, birth_date, position, personal_number, issue_number) VALUES('$first_name', '$last_name', '$birth_date', '$position', '$personal_number', '242werr')";
    $status = $conn->exec($query);

    if($status != 0) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "fail"]);
    }
}

if(isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $query = "DELETE FROM info WHERE id=$id";
    $status = $conn->exec($query);

    if($status != 0) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "fail"]);
    }
}

if(isset($_POST['edit'])) {
    $id = $_POST['edit'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birth_date= $_POST['birth_date'];
    $personal_number = $_POST['personal_number'];
    $position = $_POST['position'];

    $query = "UPDATE info SET first_name='$first_name', last_name='$last_name', birth_date='$birth_date', personal_number='$personal_number', position='$position' WHERE id=$id";
    $status = $conn->exec($query);

    if($status != 0) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "fail"]);
    }
}
