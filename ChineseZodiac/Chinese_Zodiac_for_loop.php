<?php
$Zsigns = array( "rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "sheep", "monkey", "rooster", "dog", "pig");
echo '<table style="width:100%">';
    echo '<tr>';
    for ( $sign = 0; $sign < count($Zsigns); ++$sign) {
        echo '<td><img src="images/'.$Zsigns[$sign].'.png"></td>';
    }
    echo '</tr>';
    echo '<tr>';
    for ( $year = 1912; $year <= data("Y"); ++$year ) {
        $col = 12;
        echo '<td>'.$year.'</td>';
        $col++;
    }
    echo '</tr>';
echo '</table>';
?>
