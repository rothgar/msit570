<textarea name="proverb" form="proverb"></textarea>
<form method="POST" id="proverb">
  <input type="submit">
</form>

<?php 
/*
 * Justin Garrison
 * MSIT570
 * Term Project
 * 2015-01-24
 */
if (isset($_POST["proverb"])) {
  $proverb = $_POST["proverb"];
  $file = fopen("proverbs.txt", a);
  fwrite($file, $proverb."\n");
}
?>
