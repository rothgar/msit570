<!DOCTYPE html>
<html>
<head></head>
<body>

<!-- main form -->
<form name="degree" method="GET" action="#">
<!-- do some radio button magic to make the last selection stick -->
fahrenheit to celcius <input type="radio" name="scale" value="f" <?php if(!isset($_GET['scale']) || (isset($_GET['scale']) && $_GET['scale'] == 'f')) echo ' checked="checked"';?>>
    <br>
    celcius to fahrenheit <input type="radio" name="scale" value="c" <?php if(isset($_GET['scale']) && $_GET['scale'] == 'c')  echo ' checked="checked"';?>>
    <br>
    <br>
    <!-- Temperature we are going to convert -->
    <input type="text" name="degrees0" value="<?php print $degrees0 ; ?>"> Start Tempurature
    <br>
    <input type="text" name="degrees1" value="<?php print $degrees1 ; ?>"> End Tempurature
    <br>

    <br>
    <input type="submit" name="temp_submit" value="Convert">
</form>

<?php
// first check if the button has been pressed
if (isset($_GET['temp_submit'])) {
    // if scale is selected, set the variable
    if (isset($_GET['scale'])) {
        $scale = $_GET['scale'];
    } else {
        // this should never happen, but just in case
        exit ('No scale selected' );
    }
    echo "<br>";
    // get submitted degrees
    $degree0 = $_GET['degrees0'];
    $degree1 = $_GET['degrees1'];

    // Start table layout
    echo "<table border=1>";

    if ( $scale == "f" ) {
        // conversion for f -> c
        for ($i = $degree0; $i <= $degree1; $i++) {
            echo "<tr>";
            // show starting tempurature
            echo '<td style="width:80px;text-align:right">'. $i ."</td>";
            // calculate converted tempurature
            echo '<td style="width:80px;text-align:right">' . round(($i-32)*(5/9), 1) . "</td>";
            echo "</tr>";
        }
    } else {
        // conversion for c -> f
        for ($i = $degree0; $i <= $degree1; $i++) {
            echo "<tr>";
            // show starting tempurature
            echo '<td style="width:80px;text-align:right">'. $i ."</td>"; 
            // calculate converted tempurature
            echo '<td style="width:80px;text-align:right">' . round(($i*(9/5))+32, 1) . "</td>";
            echo "</tr>";
        }
    }

    // End table
    echo "</table>";
}
?>
</body>
</html>
