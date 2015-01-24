<form enctype="multipart/form-data" method="POST" >
  <input type="file" name="filename">
  <input type="submit" value="Upload File">
</form>

<?php
echo getname();
if ($_FILES['filename']['error'] = 0) {
  $directory = "/images";
  $tmp_name = $_FILES["filename"]["tmp_name"];
  $name = getname();
  move_uploaded_file($_FILES["filename"]["tmp_name"], "$directory"."/"."$name");
} else {
  echo $_FILES['filename']['error'];
}

function getname() {
  $files = glob($directory.'Dragon*.png');
  natsort($files);
  preg_match('!Dragon(\d+)!', end($files), $matches);
  $newname = 'Dragon' . ($matches[1] + 1) . '.png';
  return $newname;
}
?>
