<style>
table {
  border: 1px solid black;
  width: 100%;
}
td {
  border: 1px solid black;
}
</style>

<?php
/*
 * Justin Garrison
 * MSIT570
 * Term Project
 * 2015-01-24
 */

// create zodiac signs array
$signs = array( "rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "sheep", "monkey", "rooster", "dog", "pig");
// set timezone to get current year
date_default_timezone_set('America/Los_Angeles');
// initialize variable to count columns
$col = 1;

echo '<table>';
echo '<tr>';
// header row for images
for ( $sign = 0; $sign < count($signs); ++$sign) {
  echo '<td><img src="images/'.$signs[$sign].'.png"></td>';
}
echo '</tr>';
echo '<tr>';
for ( $year = 1912; $year <= date("Y"); ++$year ) {
  echo '<td>'.$year.'</td>';
  if ( $col % 12 === 0 ) {
    echo '</tr>';
    echo '<tr>';
  }
  $col++;
}
echo '</tr>';
echo '</table>';
?>
