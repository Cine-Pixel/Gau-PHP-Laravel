<?php 
    require_once "db.php";

    if(isset($_POST['add_question'])) {
        $text = $_POST['text'];
        $answer = boolval($_POST['answer']);
        $stmt = $conn->prepare("INSERT INTO question (text, answer) VALUES(:text, :answer)");
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':answer', $answer);
        $stmt->execute();
    }
?>

<h1>add</h1>

<form method="POST" action="">
    <label>
        <span>Question text</span><br>
        <input type="text" name="text">
    </label>
    <br>
    <br>
    <label>
        <span>True or False</span><br>
        <input type="radio" name="answer" value="1"> - True
        <input type="radio" name="answer" value="0"> - False
    </label>
    <br>

    <br>
    <input type="submit" value="Add" name="add_question">
</form>