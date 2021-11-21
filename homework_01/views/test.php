<h1>Test page</h1>

<form method="POST">
    <?php
    foreach($words as $word => $answers) {
    ?>
        <div class="row">
            <div class="form-group">
                <h5><?= $word ?></h5>

            <?php
                foreach($answers as $ans){
            ?>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        <input 
                            class="form-check-input" 
                            type="radio" 
                            name="<?= $word ?>" 
                            value="<?= $ans ?>" 
                        >
                            <?= $ans ?>
                        </label>
                    </div>
            <?php
                }
            ?>
            </div>
        </div>
    <?php
    }
    ?>
    <input type="submit" value="Submit" class="btn btn-primary">
</form>

<!-- [
    'eng1' => ['pas1', 'pas2', 'pas3', 'pas4'], 
    'eng2' => ['pas1', 'pas2', 'pas3', 'pas4'],
] -->
