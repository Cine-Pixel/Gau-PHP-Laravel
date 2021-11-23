<?php 
    require_once "db.php";

    if(isset($_POST['save'])) {
        $id = $_POST['id'];
        $text = $_POST['text'];
        $answer = boolval($_POST['answer']);
        $query = "UPDATE question SET text='$text', answer=$answer WHERE id=$id";
        $conn->exec($query);
    }
    
    if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM question WHERE id=$id";
        $conn->exec($query);
    }

    $query = "SELECT * FROM question";
    $stmt = $conn->query($query);

    $questions = [];

    while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $q = ["id" => $row['id'], "text" => $row['text'], "answer" => $row['answer']];
        array_push($questions, $q);
    }

?>
<h1>Edit</h1>

<div>

    <?php
    foreach($questions as $question) {
    ?> 
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $question['id'] ?>">
            <input class="question-text" type="text" name="text" value="<?= $question['text'] ?>">
            <?php
            if($question['answer']) {
                echo '<input type="radio" name="answer" checked>- True';
                echo '<input type="radio" name="answer">- False';
            } else {
                echo '<input type="radio" name="answer">- True';
                echo '<input type="radio" name="answer" checked>- False';
            }
            ?> 

            <input type="submit" value="Save" name="save">
            <input type="submit" value="Delete" name="delete">
        </form>
    <?php
    }
    ?>

</div>