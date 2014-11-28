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
    <input type="text" name="degrees" value="<?php print $sub_degrees ; ?>"> Degrees
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
    $sub_degrees = $_GET['degrees'];
    if ( $scale == "f" ) {
        // echo conversion for f -> c
        echo round(($sub_degrees-32)*(5/9), 1);
    } else {
        // conversion for c -> f
        echo round(($sub_degrees*(9/5))+32, 1);
    }
}
?>
</table>
</body>
</html>
