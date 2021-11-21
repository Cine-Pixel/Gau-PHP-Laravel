<?php
session_start();

require_once "db.php";


$stmt = $conn->query("SELECT * FROM question ORDER BY RAND() LIMIT 7");

$questions = [];

while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
    $question = ["q".$row['id'] => [$row["text"], $row["ans1"], $row["ans2"], $row["ans3"]], "correct" => $row["ans1"]];
    array_push($questions, $question);
}

$_SESSION["questions"] = $questions;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

    <title>Quiz</title>
</head>
<body>
    <div style="display: flex; justify-content: space-between;">
        <h3>Points: <span id="points">0</span></h3>
        <button>End Test</button>
    </div>

    <div>
        <?php
        foreach($questions as $question) {
            $q = reset($question);
            $qname = array_key_first($question);
            // echo "<pre>";
            // print_r($question);
            // echo "</pre>";

        ?>
            <div class="question">
                <p><?= $q[0] ?></p>
                <div class="answers">
                    <input type="radio" name="<?= $qname ?>" value="<?= $q[1] ?>"> - <?= $q[1]?><br>
                    <input type="radio" name="<?= $qname ?>" value="<?= $q[2] ?>"> - <?= $q[2]?><br>
                    <input type="radio" name="<?= $qname ?>" value="<?= $q[3] ?>"> - <?= $q[3]?><br>
                </div>
            </div> 

        <?php
        }
        ?>
    </div>


    <!-- აჩვენე დასრულების შემდეგ -->
    <form action="end-test.php" method="post" style="display: none;">
        First name: <input type="text" name="fname">
        Last name: <input type="text" name="lname">
        Personal number: <input type="text" name="pn">
    </form>

    <script src="app.js"></script>
</body>
</html>
