<?php
date_default_timezone_set('America/Los_Angeles');
$currentyear = date(Y);

if (isset($_POST['birthyear'])) {
  $sign = findsign($_POST['birthyear']);
  echo "You were born under the sign of the " . $sign;
  echo "<br/ >";
  echo "<img src='images/" . $sign .".png'>";

} else {
?>
  <form method="POST" >
  <p>What year were you born? <input type="number" name="birthyear" min="<?php echo $currentyear-100 ?>" max="<?php echo $currentyear ?>" required></p>
    <input type="submit" name="submit">
  </form>
<?php } ?>

<?php
function findsign($zyear) {
  // create zodiac signs array
  $signs = array( "monkey", "rooster", "dog", "pig", "rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "sheep");
  if ($zyear % 12 === 0) {
    $sign = $signs[0];
  } elseif ($zyear % 12 === 1) {
    $sign = $signs[1];
  } elseif ($zyear % 12 === 1) {
    $sign = $signs[1];
  } elseif ($zyear % 12 === 2) {
    $sign = $signs[2];
  } elseif ($zyear % 12 === 3) {
    $sign = $signs[3];
  } elseif ($zyear % 12 === 4) {
    $sign = $signs[4];
  } elseif ($zyear % 12 === 5) {
    $sign = $signs[5];
  } elseif ($zyear % 12 === 6) {
    $sign = $signs[6];
  } elseif ($zyear % 12 === 7) {
    $sign = $signs[7];
  } elseif ($zyear % 12 === 8) {
    $sign = $signs[8];
  } elseif ($zyear % 12 === 9) {
    $sign = $signs[9];
  } elseif ($zyear % 12 === 10) {
    $sign = $signs[10];
  } elseif ($zyear % 12 === 11) {
    $sign = $signs[11];
  }
  return $sign;
}
?>
