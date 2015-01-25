<!DOCTYPE html>

<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Show Source Code</title>
</head>

<body>

<?php
/*
 * Justin Garrison
 * MSIT570
 * Term Project
 * 2015-01-24
 */
if (isset($_GET['source_file'])) {
 $SourceFile = file_get_contents(
 stripslashes($_GET['source_file']));
 highlight_string($SourceFile);
}
else
 echo "<p>No source file name entered</p>\n";
?>

</body>
</html>
