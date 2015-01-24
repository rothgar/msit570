<textarea name="list" form="signs"></textarea>
<form method="POST" id="signs">
  <input type="submit">
</form>

<?php
if (isset($_POST['list'])) {
  $sorted = explode(',', $_POST['list']);
  //DEBUGGING print_r($sorted);)
  sort($sorted);
  echo "<ol>";
  foreach ( $sorted as $sign ) {
    echo "<li>$sign</li>";
  }
  echo "</ol>";
}
?>

