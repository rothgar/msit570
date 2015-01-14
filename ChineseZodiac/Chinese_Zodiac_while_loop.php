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
/* Justin Garrison
 * 2015-01-
 * 
 */

// create zodiac signs array
$signs = array( "rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "sheep", "monkey", "rooster", "dog", "pig");
// set timezone to get current year
date_default_timezone_set('America/Los_Angeles');
// initialize variable to count columns
$col = 1;
$sign = 0;
$year = 1912;

echo '<table>';
echo '<tr>';
// header row for images
while ( $sign < count($signs)) {
  echo '<td><img src="images/'.$signs[$sign].'.png"></td>';
  $sign++;
}
echo '</tr>';
echo '<tr>';
while ( $year <= date("Y")) {
  echo '<td>'.$year.'</td>';
  if ( $col % 12 === 0 ) {
    echo '</tr>';
    echo '<tr>';
  }
  $year++;
  $col++;
}
echo '</tr>';
echo '</table>';
?>
