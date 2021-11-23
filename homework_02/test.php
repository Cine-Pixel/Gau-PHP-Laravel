<?php 
    session_start();
    require_once "db.php";

    $query = "SELECT * FROM question ORDER BY RAND() LIMIT 5";
    $stmt = $conn->query($query);
    $questions = [];

    while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $q = ["id" => $row['id'], "text" => $row['text'], "answer" => $row['answer']];
        array_push($questions, $q);
    }
    
    $_SESSION['questions'] = $questions;
?>

<h1>test</h1>

<form action="" method="post">
    <label>
        <span>question</span><br>
        <input type="radio" name="answer"> - True
        <input type="radio" name="answer"> - False 
    </label>
</form>
