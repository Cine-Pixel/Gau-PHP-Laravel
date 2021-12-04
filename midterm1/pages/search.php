<?php 

$infos = [];

if(isset($_GET['filter'])) {
    $field = $_GET['field'];
    $keyword = $_GET['keyword'];

    $query = "SELECT * FROM info WHERE $field LIKE '$keyword%'";
    $stmt = $conn->query($query);


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
}
?>

?>
<h1>Search</h1>

<form action="" method="get">
    <select name="field">
        <option value="first_name">first name</option>
        <option value="last_name">last name</option>
        <option value="position">position</option>
    </select>
    <br>
    <input type="text" name="keyword">
    <br>
    <input type="submit" name="filter">
</form>

<?php
foreach($infos as $info) {
?> 
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $info['id'] ?>">
        <input id="fn<?= $info['id'] ?>" type="text" name="first_name" value="<?= $info['first_name'] ?>">
        <input id="ln<?= $info['id'] ?>" type="text" name="last_name" value="<?= $info['last_name'] ?>">
        <input id="bd<?= $info['id'] ?>" type="date" name="birth_date" value="<?= $info['birth_date'] ?>">
        <input id="pos<?= $info['id'] ?>" type="text" name="position" value="<?= $info['position'] ?>">
        <input id="pn<?= $info['id'] ?>" type="text" name="personal_number" value="<?= $info['personal_number'] ?>">
        <input id="rd<?= $info['id'] ?>" type="datetime" name="reg_date" value="<?= $info['reg_date'] ?>" disabled>
        <input id="in<?= $info['id'] ?>" type="text" name="issue_number" value="<?= $info['issue_number'] ?>" disabled>

        <input type="submit" value="Save" class="btn-save" name="save" data-id="<?= $info['id'] ?>">
        <input type="submit" value="Delete" name="delete" class="btn-delete" data-id="<?= $info['id'] ?>">
    </form>
<?php
}
?>
