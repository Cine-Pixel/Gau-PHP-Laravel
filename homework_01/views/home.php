<h1>Dictionary</h1>
<br>

<form>
  <h3>Add new word</h3>
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
<br>

<div class="table-responsive">
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Georgian Word</th>
        <th scope="col">English Word</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    <tbody>
      <?php
        foreach($pairs as $pair) {
      ?>
          <tr>
            <td> <?= $pair["word_ge"] ?> </td>
            <td> <?= $pair["word_en"] ?> </td>
            <td>
              <button class="btn btn-success btn-sm">Update</button>
              <button class="btn btn-danger btn-sm">Delete</button>
            </td>
          <tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>