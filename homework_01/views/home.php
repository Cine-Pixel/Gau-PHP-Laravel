<h1>home</h1>

<form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" name="word_ge" placeholder="Georgian Word">
    </div>

    <div class="col">
      <input type="text" class="form-control" name="word_en" placeholder="English Word">
    </div>
  </div>

  <br>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

<?php
    foreach($pairs as $pair) {
        echo "<pre>";
        echo $pair["word_ge"]." - ".$pair["word_en"];
        echo "</pre>";
    }
?>