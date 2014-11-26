<!DOCTYPE html>
<html>
<head></head>
<body>
<table border="1">
<tr>
    <td>Fahrenheit</td>
    <td>Celsius</td>
<?php
$i = 0;
while ($i < 101 ) {
    echo "<tr>";
    $j=round(($i-32)*(5/9), 1);
    echo "<td>$i</td>.<td>$j</td>";
    $i++;
    echo "</tr>";
}
?>
</table>
</body>
</html>
